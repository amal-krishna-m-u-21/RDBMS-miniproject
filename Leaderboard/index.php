<?php
include('config.php');
include('session.php');
$user_id=$_SESSION['login_session'];

include('app_updation.php');
include('web_updation.php');


$interest_id= $_POST['interest'];
//echo $interest_id;
//echo $user_id;
echo"<h1> MOBILE APPLIATIONS</h1>";

include('app_leaderboard.php');


echo"<h1> WEB-PAGES </h1>";
include('web_leaderboard.php');





?>