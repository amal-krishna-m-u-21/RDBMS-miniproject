from flask import Flask, render_template
app = Flask(__name__)


@app.route('/')
def hello_world():
     return render_template('login.html')

@app.route('/login', methods=['POST'])
def login():
     if request.method == 'POST':
          username = request.form['username']
          password = request.form['password']
          return render_template('dasboard.html', username=username, password=password)

@app.route('/dashboard')
def index():
     return render_template('dashboard.html')


     



if __name__ == "__main__":
    app.run(debug=True )

