from flask import Flask
from flask import render_template
from flask import request
import getmydata
app = Flask(__name__)

@app.route("/")
def hello():
    return render_template('index.html', login = True)

@app.route("/login", methods=["POST"])
def login():
    _name = request.form['name']
    _password = request.form['password']
    #check root
    _root = getmydata.checkRoot(_name,_password)
    if(_root != None):
        return render_template('user.html', userlist = _root)
    _list = getmydata.checkLogin(_name,_password)
    if(_list == None):
        return render_template('index.html', login = True, attempt = True)
    _name1 = _list[0]
    _name2 = _list[1]
    return render_template('index.html', login = False, myname = _name, name1 = _name1, name2 = _name2)
    
if __name__ == "__main__":
    app.run()