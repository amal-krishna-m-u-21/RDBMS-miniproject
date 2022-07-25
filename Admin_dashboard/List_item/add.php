<?php
include('config.php');
include('session.php');
$user_id=$_SESSION['login_session'];
$type=$_POST['type'];//1=mobile,2=web
$item_name=$_POST['item_name'];
$item_url=$_POST['item_url'];
$rating=$_POST['rating'];
$review=$_POST['review'];
$description=$_POST['description'];
$interest=$_POST['interest'];



if($type==1){
    $sql="SELECT * FROM App WHERE url=$item_url ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row >=1){
        $falg="app is already listed";
    }

}
elseif($type==2){

}
else{
    echo"invalid entry";

}


?>