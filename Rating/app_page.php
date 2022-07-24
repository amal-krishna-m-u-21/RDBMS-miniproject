<html><?php

include('config.php');
include('session.php');
$ls=$_SESSION['login_session'];
$url=$_POST['url'];
$name=$_POST['name'];
$interest_id=$_POST['interest'];



$sql="SELECT * FROM App WHERE url ='$url'";
$result=mysqli_query($conn,$sql);

if(!$result){
echo"error";
}
else{
    $app=mysqli_fetch_assoc($result);
    ?>
    <section ="app_details">
    <h1><i><?= $name; ?></i></h1>
    <h5>Interest:</h5>

<h2> Discription</h2>
<P><?= $app['description'];?></P>

<h4>Rating:<?= $app['leaderboard_rating']; ?></h4>

<h3>For More details visit the official site</h3><a href="<?= $url; ?>" target="_blank">Click here</a>






    <?php
}






?>

</html>