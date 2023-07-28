from flask import Flask, render_template
from main1 import names

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index_try.html', names=names)

if __name__ == '__main__':
    app.run()