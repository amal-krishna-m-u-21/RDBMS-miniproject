<?php 
include('config.php');
session_start();
include('app_table.php');
include('web_table.php');
include('rating_table.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
</head>
<body>
    <h1> Landing page</h1>
    <button name="btn" id="btn" onclick="window.location.href='../Login_page/index.php'">Let's start</button>  
</body>
</html>