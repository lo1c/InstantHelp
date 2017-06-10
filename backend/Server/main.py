from flask import request, Flask
from pymongo import MongoClient
from uuid import uuid4
from jsonpickle import json


client = MongoClient()
app = Flask(__name__)


db = client['instanthelp']

user = db['user']
help_provider = db['helpprovider']

'''
	Iterates through the keys of the dictionary 'args' and syndicates it with the 'keys' array. If it's equal, the key-value-pair of args will be added to the returned json object. 
'''
def create_json_object(args, *keys, **kwargs):
	obj = dict(kwargs)
	obj.update({key: args[key] for key in keys})
	return obj



def insert_one(collection, json):
	collection.insert_one(json)


'''
	Updates the MongoDB Colection with a json code
'''
def update(collection, json):
	collection.update(json)


'''
	Parses the parameter given with the registration process into the help_provider database
'''
def create_help_provider(uid):
	try:
		jsonobj = create_json_object(request.args, 'subjects', 'schooltype', 'schoolyear', 'rating', uid=uid)
	
		return json.dumps({'code': 'success', 'msg': '//', 'method': '/createuser->createhelpprovider','result': insert_one(help_provider, jsonobj)})
	except KeyError as err:
		return json.dumps({'code': 'error', 'msg': err.msg, 'method': '/createuser->createhelpprovider'})


'''

	URL: 	   http://<myip>:5000/createuser
	METHOD:    PUT
	PARAMETER: {
		username: 	 The users username (e.g. 'xXxm4xmust3rm4nnxXxLP')
		prename:  	 The users prename (e.g. 'Max')
		surname:  	 The users surname (e.g. 'Mustermann')
		email:    	 The users email address (e.g. 'maxmustermann@web.de')
		phone:    	 The users phone number	(e.g. '+491701234567')
		password: 	 The users password, encrypted in SHA-128 (e.g. '')
		birthdate:   The users birthday (e.g. '30/04/1999')
		picture:	 The users profile picture (if null -> a Identicon will be created) (e.g. '90c7f04e-f945-49cd-af30-de5a1946ca1f.jpg' OR '!192.168.123.213')
		cur_pos:	 The users current latitude and longitude, separated by a semicolon (e.g. '53.5623654;9.959824')
		is_provider: If the user registered itself as an help provider, this parameter will be 'true' (e.g. 'true')
		
	if is_provider is 'true'
		subjects[]:	 The subjects the user wants to teach in (e.g. [math, english, german])
		schooltype:	 The users schooltype where 0 = Gymnasium, 1 = Stadtteilschule, 2 = Gesamtschule, 3 = Grundschule, 4 = Waldorfschule, 5 = Berufsschule (e.g. 3) 
		schoolyear:  The users schoolyear (e.g. 11)
		rating[]:	 The users rating, separated in three categories (punctuality, explanatory capacity, friendliness) in a range from 0 to 5 (e.g. [3.2, 4.6, 1.2])
		
	}

'''
@app.route('/createuser', methods=['PUT'])
def create_user():
	try:
		jsonobj = create_json_object(request.args, 'username', 'prename', 'surname', 'email', 'phone', 'password', 'birthdate', 'picture', 'cur_pos', 'is_provider', uid=str(uuid4()))

		result = insert_one(user, jsonobj)
		subresult = "null"
		
		if request.args['is_provider'] == 'true':
			subresult = create_help_provider(jsonobj['uid'])
			
			
		return json.dumps({'code': 'success', 'msg': '//', 'method': '/createuser', 'result': result, 'subprocess': subresult, 'user': {'uid': jsonobj['uid']}})
	
	except KeyError as err:
		return json.dumps({'code': 'error', 'msg': err.msg, 'method': '/createuser'})
	
	
	
	
	
	
	
'''

	URL: 	   http://<myip>:5000/updateposition
	METHOD:    POST
	PARAMETER: {
		uid:	 the users uid (e.g. '90c7f04e-f945-49cd-af30-de5a1946ca1f')
		cur_pos: the current latitude and longitude of the user, separated by a semicolon (e.g. '53.5623654;9.959824')
	}

'''
@app.route('/updateposition', methods=['POST'])
def update_location():
	try:
		jsonobj = create_json_object(request.args, 'cur_pos')
		
		
		#SQL Injection
		result = update(user, jsonobj)
		
		return json.dumps({'code': 'success', 'msg': '//', 'method': '/updateposition', 'result': result})
	except KeyError as err:
		return json.dumps({'code': 'error', 'msg': err.msg, 'method': '/updateposition'})
	
	
	
	
	

	
	
'''
	Starts the flaskserver
'''
if __name__ == "__main__":
	app.run()
