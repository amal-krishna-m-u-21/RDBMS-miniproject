<?php
include('config.php');
include('session.php');

$review=$_POST['review'];
$app_id=$_POST['app_id'];
$user_id=$_SESSION['login_session'];
$rating=$_POST['rating'];


$_SESSION['app_page_id']=$app_id;
$sql="SELECT * FROM Rating WHERE user_id=$user_id AND app_id=$app_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if($row != 0)
{
    $sql1="UPDATE Rating SET rating = $rating ,review = '$review' WHERE  user_id=$user_id AND app_id=$app_id";
    $result1=mysqli_query($conn,$sql1);
    if(!$result1)
    {
        $flag="update".mysqli_error($conn);
        echo $flag;
    }
    else
    {
        $flag="updated";
      
        header('location:./review_app.php');


    }
}
else{
    $sql2="INSERT INTO Rating (app_id,user_id,rating,review) VALUES ($app_id,$user_id,$rating,'$review')";
    $result2=mysqli_query($conn,$sql2);
    if(!$result2)
    {
        $flag="Insertion".mysqli_error($conn);
        echo $flag;
    }
    else
    {
        $flag="Inserted";
      
        header('location:./review_app.php');


    }

}
?>