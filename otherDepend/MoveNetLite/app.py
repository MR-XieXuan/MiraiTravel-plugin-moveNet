import argparse
from flask import Flask, render_template,request
# Import matplotlib libraries
from matplotlib import pyplot as plt
plt.switch_backend('agg')
import cv2
from ml import Movenet
import utils
import os, stat
parser = argparse.ArgumentParser(
      formatter_class=argparse.ArgumentDefaultsHelpFormatter)
parser.add_argument(
    '--model',
    help='Name of estimation model.',
    required=False,
    default='movenet_lightning')
args = parser.parse_args()
pose_detector = Movenet(args.model)
app = Flask(__name__)
@app.route('/',methods=['GET', 'POST'], endpoint='test01')
def hello_world():
    getData = request.args.to_dict() # 利用request对象获取GET请求数据
    #image_path = 'image.png'
    image_path = getData['imagePath']
    try :
        image = cv2.imread(image_path )
    except :
        return "null"
    list_persons = [pose_detector.detect(image)]
    # Draw keypoints and edges on input image
    image = utils.visualize(image, list_persons)
    image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
    plt.imshow(image)
    plt.axis('off')
    plt.savefig( image_path.replace('inputImage', 'outputImage') , dpi=1000 , bbox_inches='tight',pad_inches = 0)
    os.chmod(image_path.replace('inputImage', 'outputImage'),stat.S_IRWXU|stat.S_IRWXG|stat.S_IRWXO)
    return getData 
if __name__ == '__main__':
    app.run()