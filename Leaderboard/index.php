<!DOCTYPE html>
<head>
<link rel="stylesheet" href="./Css/lb.css">

</head>
<body>
    



<?php
include('config.php');
include('session.php');
$user_id=$_SESSION['login_session'];

include('app_updation.php');
include('web_updation.php');


$interest_id= $_POST['interest'];
//echo $interest_id;
//echo $user_id;


?> 
        <button class="button"name="prev" id="prev" onclick="window.history.back()">PREV</button>
<div class="card">   
        <?php
include('app_leaderboard.php');

?></div>

<div class="card"> 
        <?php
include('web_leaderboard.php');





?>
</div>

 <!-- animation  jquery library linking :Anime.js  -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
         <script src='https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.js'></script><script  src="./Js/reg-animation.js"></script>



</body>
</html>