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
# End of getmydata.py