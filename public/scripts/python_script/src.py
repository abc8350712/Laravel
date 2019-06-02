import face_recognition
from tools.img2json import getEmbedding
import json
import argparse
parser = argparse.ArgumentParser()
parser.add_argument("--query_dir")
args = parser.parse_args()

json_dir = './python_script/data/data.json'

def argmin(lst):
	return min(range(len(lst)), key=lst.__getitem__)
def argmax(lst):
	return max(range(len(lst)), key=lst.__getitem__)

def readJsonData(json_dir):
    return json.load(open(json_dir, encoding='utf-8'))

def getItems(json_dir):
    dict_data = readJsonData(json_dir)
    feature = dict_data['feature']
    name = dict_data['name']

    return [name, feature]

[names, features] = getItems(json_dir)
query_embedding = getEmbedding(args.query_dir)
distance = face_recognition.face_distance(features, query_embedding)
ind = argmin(distance)
print(names[ind])






