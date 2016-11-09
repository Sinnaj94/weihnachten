#!/usr/bin/python
# Filename: getmydata.py
import json
data = {}
with open('users.json') as data_file:    
    data = json.load(data_file)


def getData(name):
    for object in data:
        for key,value in object.items():
            if(key == name):
                print(key)
                return value
    return None

def getDataWKey(key,_data):
    return _data[key]
        
                
def checkLogin(name,password):
    name_attributes = getData(name)
    if(name_attributes == None):
        return None
    if(str(password) != getDataWKey("password",name_attributes)):
        return None
    return getDataWKey("partners",name_attributes)

def checkRoot(name,password):
    if(name == "WICHTELMASTER"):
        if(password == "0486"):
            return getUsersAndPasswords()
    return None

def getUsersAndPasswords():
    _string = ""
    _names = []
    _passwords = []
    for object in data:
        for(key,value) in object.items():
            _string = _string + str(key) + ": "
            _names.append(str(key))
            for(key,value) in value.items():
                if(key == "password"):
                    _passwords.append(str(value))
                    _string = _string + str(value) + "\n"
    _return = dict(zip(_names,_passwords))
    return _return
# End of getmydata.py