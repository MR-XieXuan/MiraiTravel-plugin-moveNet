import argparse
import logging
import sys
import time
import numpy
from flask import Flask, render_template,request

# Import matplotlib libraries
from matplotlib import pyplot as plt
#plt.switch_backend('agg')
from matplotlib.collections import LineCollection
import matplotlib.patches as patches

import tensorflow as tf
import tensorflow_hub as hub
from tensorflow_docs.vis import embed
import numpy as np

import cv2
from ml import Classifier
from ml import Movenet
from ml import MoveNetMultiPose
from ml import Posenet
import utils

import json

parser = argparse.ArgumentParser(
      formatter_class=argparse.ArgumentDefaultsHelpFormatter)
parser.add_argument(
    '--model',
    help='Name of estimation model.',
    required=False,
    default='movenet_lightning')
args = parser.parse_args()
pose_detector = Movenet(args.model)


image = cv2.imread("a.png" )
#image = cv2.flip(image, 1)

list_persons = [pose_detector.detect(image)]

# Draw keypoints and edges on input image
image = utils.visualize(image, list_persons)
image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
plt.imshow(image)
plt.show()

