
        <?php 
        include('config.php');
         session_start();
         include('session.php');
         $ls=$_SESSION['login_session'];
         $sql = "SELECT * FROM User_details WHERE user_id='$ls'";
         $result = mysqli_query($conn,$sql);

if($result)
{}
else{
  echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."GO back & try Selecting DOb";
}
         $row = mysqli_fetch_array($result);
       ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $row['user_name']; ?> Dashboard</title>

   

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- header section starts  -->

<header>

    <div class="user">
        <img src="person.svg" hight="15rem" width="15rem" alt="">
        <div class="name"> <?= $row['user_name']; ?> </div>
        <div class="review">
        <button class="button" onclick="window.location='#review_details'">Total review<br>256</button>
        <button class="button"  onclick="window.location='#review_details'">Total rating<br>5000</button>
    </div>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#personal_details">Personal details</a></li>
            <li><a href="#review_details">Review details</a></li>
            <li><a href="#Leaderboard">Leaderboard</a></li>
            <li><a href="../Login_page/logout.php">Log Out</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->


<!-- content section starts  -->

<div class="container">

    <section class="home" id="home">

<?php include('home.php'); ?>

    </section>

    <!-- Personal details section  -->

    <section class="personal_details" id="personal_details">

<?php include('personal_details.php'); ?>
    </section>

    <!-- Review details section  -->
    <section class="review_details" id="review_details">
    <?php include('review_details.php'); ?>


    </section>

    <!-- Leaderboard section  -->
    <section class="Leaderboard" id="Leaderboard">

<?php 

echo"select interest And category";

?>

</section>


</div>

<!-- content section ends -->


</body>
</html>
    
