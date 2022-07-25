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
$interest=$_POST['interestlist'];




foreach($interest as $interest_item)
{
   // echo $interest_item."<br>";
   


             
    $sql = "INSERT INTO Wating_list ( user_id,interest_id,item_name,item_type,item_url,item_description,item_review,item_rating)
     VALUES ($user_id,$interest_item,'$item_name','$item_type','$item_url','$description','$review','$rating')";
    $result = mysqli_query($conn,$sql);


}
if(!$result){
    echo"error insertion";
}else{
    $flag="isertion completed";
    header('location:../../Dashboard/leaderboard.php');
}














?>