<?php
include('config.php');
include('session.php');

$review=$_POST['review'];
$web_id=$_POST['web_id'];
$user_id=$_SESSION['login_session'];
$rating=$_POST['rating'];


$_SESSION['web_page_id']=$web_id;
$sql="SELECT * FROM Rating WHERE user_id=$user_id AND web_id=$web_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if($row != 0)
{
    $sql1="UPDATE Rating SET rating = $rating ,review = '$review' WHERE  user_id=$user_id AND web_id=$web_id";
    $result1=mysqli_query($conn,$sql1);
    if(!$result1)
    {
        $flag="update".mysqli_error($conn);
        echo $flag;
    }
    else
    {
        $flag="updated";
      
        header('location:./review_web.php');


    }
}
else{
    $sql2="INSERT INTO Rating (web_id,user_id,rating,review) value ('$web_id','$user_id','$rating','$review')";
    $result2=mysqli_query($conn,$sql2);
    if(!$result2)
    {
        $flag="Insertion".mysqli_error($conn);
        echo $flag;
    }
    else
    {
        $flag="Inserted";
      
        header('location:./review_web.php');


    }

}
?>