
  <form class="registerPage" name="registerPage" action="reg.php"  onsubmit="return validateForm()" method="POST" required>
    <h1>Create Account</h1>
    <div class="group">
      <label class="fas fa-signature" for="name"></label>
      <input type="text" name="name" placeholder="name"/><br>
       </div>
       <div class="group">
         <label class="far fa-envelope" for="email"></label>
         <input type="email" name="email" placeholder="E-mail"/>
        </div>
        <div class="group">
          <label class="fas fa-key" for="password"></label>
          <input type="password" id ="password" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
        </div>
        <div class="group">
          <label class="fas fa-key" for="password2"></label>
          <input type="password" name="password2" id="password2" placeholder=" confirm password"/>
          <br><small> show password</small><input type="checkbox" onclick="visible(),visiblei()">
        </div>
        <div class="date">
           <input type="date" name="dob" value=""
           min="1997-01-01" max="2030-12-31">
         </div>
        <button class="button" id="register" type="submit">Register</button>
      </form>
  <div class="cover">
    <button id="changePage" name="changePage"></button>
  </div>
</div>