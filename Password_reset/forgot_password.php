<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Js/validate.js"></script>
    <title>forgot_password</title>
</head>
<body>
    <button name="prev" id="prev" onclick="window.history.back()">PREV</button>
    <header>
        <h1>
            Forgot password?
        </h1>
    </header>
    <form action="forgotpaswd.php"  name="forgot_password_form" onsubmit="return validateFormforgot()" method="post">
        <input type ="text" name="email" id ="email" placeholder="Email"><br>
        <input type ="date" name="dob" id="dob" placeholder="dob"><br>
        <input type ="password" name="password" id= "password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/><br>
        <input type ="password" name="password2" id= "password2" placeholder="Confirm Password" required><br>
<input type ="checkbox" name="showpassword" id="showpassword" onclick="visible(),visiblei()"><label>show password</label>

<br>
<input type="submit" value="confrim">
</form>


    </body>


</html>

