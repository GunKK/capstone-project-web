import os
import cv2
from glob import glob
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
import tensorflow as tf
from tensorflow import keras
from tensorflow.keras.models import Model, load_model, save_model
import keras.backend as K
IMG_HEIGHT=256
IMG_WIDTH=256

model = load_model('./Models/unet_model.h5', compile=False)

def load_images(directory):
    images = []
    masks = glob(directory+'/*/*_mask.tif')

    for i in masks:
        images.append(i.replace('_mask',''))
    return(images, masks)

data_path = './static/dataset/kaggle_3m'
images, masks = load_images(data_path)

def predict_tumor(path):
    img = cv2.imread(path)
    img = cv2.resize(img ,(256, 256))
    img = img / 255
    img = img[np.newaxis, :, :, :]
    pred = model.predict(img)
    value=np.max(np.squeeze(pred > 0.5).astype(np.uint8))
    tumor = 'Tumor' if value > 0 else 'No Tumor'
    return { 'predict': tumor }