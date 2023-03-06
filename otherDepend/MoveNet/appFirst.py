import tensorflow as tf
import tensorflow_hub as hub
from tensorflow_docs.vis import embed
import numpy as np
import cv2

# Import matplotlib libraries
from matplotlib import pyplot as plt
from matplotlib.collections import LineCollection
import matplotlib.patches as patches

# Some modules to display an animation using imageio.
import imageio
from IPython.display import HTML, display

model_name = "movenet_lightning"

if "tflite" in model_name:
  # Initialize the TFLite interpreter
  interpreter = tf.lite.Interpreter(model_path="model.tflite")
  interpreter.allocate_tensors()

  def movenet(input_image):
    """Runs detection on an input image.

    Args:
      input_image: A [1, height, width, 3] tensor represents the input image
        pixels. Note that the height/width should already be resized and match the
        expected input resolution of the model before passing into this function.

    Returns:
      A [1, 1, 17, 3] float numpy array representing the predicted keypoint
      coordinates and scores.
    """
    # TF Lite format expects tensor type of uint8.
    input_image = tf.cast(input_image, dtype=tf.uint8)
    input_details = interpreter.get_input_details()
    output_details = interpreter.get_output_details()
    interpreter.set_tensor(input_details[0]['index'], input_image.numpy())
    # Invoke inference.
    interpreter.invoke()
    # Get the model prediction.
    keypoints_with_scores = interpreter.get_tensor(output_details[0]['index'])
    return keypoints_with_scores

else:
  if "movenet_lightning" in model_name:
    module = hub.load("https://tfhub.dev/google/movenet/singlepose/lightning/4")
    input_size = 192
  elif "movenet_thunder" in model_name:
    module = hub.load("https://tfhub.dev/google/movenet/singlepose/thunder/4")
    input_size = 256
  else:
    raise ValueError("Unsupported model name: %s" % model_name)

  def movenet(input_image):
    """Runs detection on an input image.

    Args:
      input_image: A [1, height, width, 3] tensor represents the input image
        pixels. Note that the height/width should already be resized and match the
        expected input resolution of the model before passing into this function.

    Returns:
      A [1, 1, 17, 3] float numpy array representing the predicted keypoint
      coordinates and scores.
    """
    model = module.signatures['serving_default']

    # SavedModel format expects tensor type of int32.
    input_image = tf.cast(input_image, dtype=tf.int32)
    # Run model inference.
    outputs = model(input_image)
    # Output is a [1, 1, 17, 3] tensor.
    keypoints_with_scores = outputs['output_0'].numpy()
    return keypoints_with_scores
  
# Load the input image.
while True:
  #image_path = 'image.png'
  image_path = input()
  try :
    image = tf.io.read_file( "inputImage/" + image_path)
    image = tf.image.decode_jpeg(image)
  except :
    continue
  # Resize and pad the image to keep the aspect ratio and fit the expected size.
  input_image = tf.expand_dims(image, axis=0)
  input_image = tf.image.resize_with_pad(input_image, input_size, input_size)

  # Run model inference.
  keypoints_with_scores = movenet(input_image)

  # Visualize the predictions with image.
  display_image = tf.expand_dims(image, axis=0)

  def draw_prediction_on_image( imageInput , keypoint ):
    keypoint = np.squeeze(keypoint)
    keypoint = np.squeeze(keypoint)
    for point in keypoint :
      #imageInput[int(1280*point[0])][int(1280*point[1])][0] = 0
      #imageInput[int(1280*point[0])][int(1280*point[1])][1] = 0
      #imageInput[int(1280*point[0])][int(1280*point[1])][2] = 0
      plt.plot(1280*point[1],1280*point[0] , 'o')
    return imageInput
    

  display_image = tf.cast(tf.image.resize_with_pad(
      display_image, 1280, 1280), dtype=tf.int32)

  output_overlay = draw_prediction_on_image(
      np.squeeze(display_image.numpy(), axis=0), keypoints_with_scores)
      
  #plt.figure(figsize=(5, 5))
  #np1 = np.squeeze(display_image.numpy(), axis=0)
  plt.imshow(output_overlay)
  plt.axis('off')
  plt.savefig("outputImage/"+image_path , dpi=1000 , bbox_inches='tight',pad_inches = 0)
