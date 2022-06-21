<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Let's Go</title>
  <link rel="stylesheet" href="./Css/login.css">
   <script src="./Js/reg-validation.js"></script>

</head>
<body>
                    <!-- loginpage.php : Login page-->
              <?php
              include('loginpage.php');
              ?>
                    <!-- regpage.php : Registration page-->
              <?php
              include('regpage.php');
              ?>

         <!-- animation  jquery library linking :Anime.js  -->
         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
         <script src='https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.js'></script><script  src="./Js/reg-animation.js"></script>

</body>
</html>