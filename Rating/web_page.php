<html>
    <head>
    <link rel="stylesheet" href="./Css/lb.css">
    <style>
       
       .divScroll{
         overflow:scroll;
         height:400px;
         width: 570px;;

     }
     
</style>
    </head>
    <body>
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
    
   <header>  <section ="web_details"> 
    <h1><i><?= $name; ?></i></h1>
    <h5>Interest:</h5>
</header>
    <div class="divScroll">
        <h2> Discription</h2>
        <header>  <P><?= $web['description'];?></P></header>
        
        <h4>Rating:<?= $web['leaderboard_rating']; ?></h4>

<h3>For More details visit the official site</h3><a href="<?= $url; ?>" target="_blank"><div class="button">  Official Page</div></a>

    <form action="review_web.php" method="post">
        <input type="hidden" name="id" value="<?= $web['web_id']; ?>">
        <input type="hidden" name="type" value="1">
        <input type="hidden" name="user" value="<?= $ls; ?>">
        <input type="hidden" name="webname" value="<?= $web['web_name'];?>" >
        <input class="button" type="submit" value="Review and Ratings">
    </form>
</section>  
</div>







    <?php
}






?>
</div>
</body>
</html>