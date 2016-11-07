from flask import Flask
from flask import render_template
app = Flask(__name__)

@app.route("/")
def hello():
    return render_template('index.html', login = True)

@app.route("/login", methods=["POST"])
def login():
	return render_template('index.html', login = False, name = "Jannis")

if __name__ == "__main__":
    app.run()