<?php 
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "project";

   $conn = mysqli_connect($servername,$username,$password,$dbname);
 if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
} 
  ?>
  


  <!DOCTYPE html>
  <head>
      <title>Test file</title>
</head>
<body><div class=container>
    <h1> Leaderboard - App</h1> -->

    <?php


$app_id=1;
$lrating;
$sql="SELECT DISTINCT app_id FROM Rating";
$result=mysqli_query($conn,$sql);
$i=mysqli_num_rows($result);
for($j=1;$j<$i;$j++){ 
$sql = "SELECT 	app_id,AVG(rating) AS rating FROM  Rating WHERE app_id='$app_id'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);
if($result!=0){
  
  ?>
<h1><?= $rows['app_id']; ?> </h1> Has a rating of 
<h2><?= $rows['rating']; ?> </h2><br>
<?php
$app_id++;


}}

?>

</div>






</html> 