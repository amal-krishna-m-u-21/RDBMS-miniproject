<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Js/validate.js"></script>
    <link rel="stylesheet" href="./Css/fp.css">
    <style>
        .background-image{

background-image: url('./pswdrest.jpg');

background-size: cover;
background-repeat: no-repeat;
width: 800px;
height:480px;

}
 </style>



    <title>forgot_password</title>
</head>

<body>
    <div class="background-image"> 
    <div class="card">
        <header>
            <h1>
                Reset password!!!
            </h1>
        </header>
        <form action="resetpaswd.php" name="forgot_password_form" onsubmit="return validateFormforgot()" method="post">

            <div class="group">
                <input type="text" name="email" id="email" placeholder="Email"><br>
            </div>
            <div class="group">
                <input type="password" name="prepswd" id="prepswd" placeholder="Old password"><br>
            </div>

            <div class="group">
                <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /><br>
            </div>
            <div class="group">

                <input type="password" name="password2" id="password2" placeholder="Confirm Password" required><br>
            </div>
            <div class="group">

                <input type="checkbox" name="showpassword" id="showpassword" onclick="visible(),visiblei()"><label>show password</label>

            </div>

            <br>


            <div class="group">

                <input class="button" type="submit" value="confrim">
            </div>


        </form>
    </div>
    </div>


    <div class="group">
        <button class="button" name="prev" id="prev" onclick="window.history.back()">PREV</button>
    </div>

</body>


</html>