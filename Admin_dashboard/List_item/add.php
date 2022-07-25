<?php
include('config.php');
include('session.php');
$user_id=$_SESSION['login_session'];
$type=$_POST['type'];
$item_name=$_POST['item_name'];
$item_url=$_POST['item_url'];
$rating=$_POST['rating'];
$review=$_POST['review'];
$description=$_POST['description'];



echo $item_url;
echo "import sucessfull";


?>