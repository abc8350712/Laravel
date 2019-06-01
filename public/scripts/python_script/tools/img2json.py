import cv2
import json
import os
from collections import defaultdict, OrderedDict

import face_recognition
root_img = './img/'

def getEmbedding(src_img):
    picture_of_me = face_recognition.load_image_file(src_img)
    my_face_encoding = face_recognition.face_encodings(picture_of_me)[0]
    return my_face_encoding

def getDict():
    pass

def dict2json(id):
    json_str = json.dumps(id, indent=4)
    return json_str

def getJsonFile(root_img):
    file_lists = os.listdir(root_img)
    id = defaultdict(list)
    for file_name in file_lists:
        name = file_name.split('.')[0]
        embedding = list(getEmbedding(root_img + file_name))
        id['feature'].append(embedding)
        id['name'].append(name)
    with open('./data/data.json', 'w') as json_file:
        json_file.write(dict2json(id))

#dict2json('lyf', list(getEmbedding()))
#getJsonFile(root_img)


