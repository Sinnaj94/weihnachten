import random
from random import randint
import json

users = ["Jannis","Kilian", "Marietta", "Michael", "Ursula", "Ruediger", "Alexander", "Nicola"]
passwords = []
def generate(_input,number):
	_user_groups = [[0 for x in range(len(users))] for y in range(number+1)]
	hasDuplicateArray(users,_user_groups)
	for i in range(0,number+1):
		_temp_array = users[:]
		while(hasDuplicateArray(_temp_array,_user_groups)):
			randomizeArray(_temp_array)
		_user_groups[i] = _temp_array
	#printResult(_user_groups)
	for i in range(len(users)):
		passwords.append(generatePassword(4))
	
	getJSON("users.json", _user_groups, passwords)


def generatePassword(digits):
	_return = ""
	for i in range(0,digits):
		_return = _return + str(randint(0,9))
	return _return
	
def printResult(arraylist):
	for _list in arraylist:
		printList(_list)

def randomizeArray(_in_list):
	random.shuffle(_in_list)

def printList(_in_list):
	print('[%s]' % ', '.join(map(str, _in_list)))	

def hasDuplicate(list1,list2):
	index = 0
	for element, element2 in zip(list1, list2):
		if(element == element2):
			print("Found duplicate.")
			return True
	return False

def hasDuplicateArray(list,arraylist):
	for i in range(len(arraylist)):
		if(hasDuplicate(list,arraylist[i])):
			return True
	return False

def getJSON(outputfilename, _json_users, _json_passwords):
    jsonA = [0] * len(_json_passwords)
    for i in range(0,len(_json_passwords)):
        jsonA[i] = {_json_users[0][i]: {"password": _json_passwords[i],"partners":[_json_users[1][i], _json_users[2][i]]}}
        #out = [_json_users[0],_json_passwords,_json_users[1],_json_users[2]]
    print(jsonA)
    #jsonF ={"Name" : {"password" : _json_passwords,"partners" : [_json_users[1], _json_users[2]]}}
    with open(outputfilename, 'w') as outfile:
        json.dump(jsonA,outfile,indent=4)
    
generate(0,2)
