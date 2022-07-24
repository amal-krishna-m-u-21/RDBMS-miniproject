<html>
    <head>

    </head>
    <body><?php

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

    </section>
<br>

<section ="review_rating">


<form action="review_app.php" method="post">
    <input type="hidden" name="id" value="<?= $app['app_id']; ?>">
    <input type="hidden" name="type" value="1">
    <input type="hidden" name="user" value="<?= $ls; ?>">
    <input type="hidden" name="appname" value="<?= $app['app_name'];?>" >
    <input type="submit" value="Review and Ratings">
</form>
</section>








    <?php
}






?>

    </body>
    </html>