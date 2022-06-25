<div class="card">
  <div class="wordLeft">
    <h2>Welcome Back</h2>
    <p>To keep connect with up please login with your personal info</p>
    <label for="changePage">Sign In</label>
  </div>
  <div class="wordRight">
    <h2>Hello Friend!</h2>
    <p>Enter your personal details and start journey with us</p>
    <label for="changePage">Sign Up</label>
  </div>
  <form class="loginPage" name="loginPage" action="login.php" onsubmit="return validateFormlog()" method="POST" required> 
    <h1>Log In</h1>
    <div class="group">
      <label class="far fa-envelope" for="email"></label>
      <input type="email" name="email" placeholder="Email"/>
    </div>
    <div class="group">
      <label class="fas fa-key" for="password"></label>
      <input type="password" name="password" id="pswd" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
      <br><small> show password</small><input type="checkbox" onclick="visiblel()">
 
    </div>
   <div class="group">
      <button class="button" id="login" type="submit">login</button>
    </div><br>
    <div class="tiny-text"><a href=../Password_reset/forgot.php> Forgot password?</a></div>
  </form>