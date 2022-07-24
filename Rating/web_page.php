<html>
    <head>
    <link rel="stylesheet" href="./Css/lb.css">

    </head>
    <?php

include('config.php');
include('session.php');
$ls=$_SESSION['login_session'];
$url=$_POST['url'];
$name=$_POST['name'];
$interest_id=$_POST['interest'];



$sql="SELECT * FROM Web WHERE url ='$url'";
$result=mysqli_query($conn,$sql);

if(!$result){
echo"error";
}
else{
    $web=mysqli_fetch_assoc($result);
    ?>
    <div class="card"> 
    
    <section ="web_details"> 
    <h1><i><?= $name; ?></i></h1>
    <h5>Interest:</h5>

<h2> Discription</h2>
<P><?= $web['description'];?></P>

<h4>Rating:<?= $web['leaderboard_rating']; ?></h4>

<h3>For More details visit the official site</h3><a href="<?= $url; ?>" target="_blank">Click here</a>
</section>
<section ="review">
    <form action="review_web.php" method="post">
        <input type="hidden" name="id" value="<?= $web['web_id']; ?>">
        <input type="hidden" name="type" value="1">
        <input type="hidden" name="user" value="<?= $ls; ?>">
        <input type="hidden" name="webname" value="<?= $web['web_name'];?>" >
        <input type="submit" value="Review and Ratings">
    </form>
</section>  
</div>

<div class="card">


<?php


?>

</div>






    <?php
}






?>

</html>