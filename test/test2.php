<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>



<!DOCTYPE html>

<head>
  <title>Test file</title>
</head>

<body>
  <div class=container>
    <h1> Leaderboard - Web</h1> -->

    <?php


    $web_id = 1;
    $lrating;
    $sql = "SELECT DISTINCT web_id FROM Rating";
    $result = mysqli_query($conn, $sql);
    $i = mysqli_num_rows($result);
    for ($j = 1; $j < $i; $j++) {
      $sql = "SELECT 	web_id,AVG(rating) AS rating FROM  Rating WHERE web_id='$web_id'";
      $sql1 = "SELECT url , web_name FROM Web WHERE web_id='$web_id'";
      $r = mysqli_query($conn, $sql1);
      $url = mysqli_fetch_assoc($r);

      $result = mysqli_query($conn, $sql);
      $rows = mysqli_fetch_assoc($result);
      if ($result != 0) {

    ?>
        <h1><a href=<?= $url['url']; ?> target="_blank"> <?= $url['web_name']; ?> </a></h1> Has a rating of
        <h2><?= $rows['rating']; ?> </h2><br>
    <?php
        $web_id++;
      }
    }

    ?>

  </div>


  this is this
</body>



</html>