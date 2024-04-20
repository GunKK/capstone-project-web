from flask import Flask, request, redirect, jsonify
import cv2
from tensorflow import keras
import numpy as np
import os
import json
from tensorflow.keras import backend as K
from tensorflow.keras.models import Model, load_model, save_model

import predict as Pre 

app = Flask(__name__)

BASE_PATH = os.getcwd()
UPLOAD_PATH = os.path.join(BASE_PATH, 'static/upload')

@app.route("/predict", methods=['POST'])
def make_prediction():
    file = request.files['file']
    filename = file.filename
    path = os.path.join(UPLOAD_PATH, filename)
    file.save(path)
    image = Pre.flatten_dicom_file(path)
    resp = Pre.predict_tumor(image)
    return json.dumps(resp)

if __name__ == "__main__":
    app.run(host='127.0.0.1', port=5000, debug=True)