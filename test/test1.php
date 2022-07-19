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
  $lrating=$rows['rating'];
  echo"$lrating";
  $update="UPDATE App SET  leaderboard_rating='$lrating' WHERE app_id='$app_id'";
  echo"$lrating";
  if(!mysqli_query($conn,$update))
  {
    echo"error";
  }

$app_id++;


}}



$sql_order="SELECT url,leaderboard_rating,app_name FROM App ORDER BY leaderboard_rating DESC";
$sql_sorted_list=mysqli_query($conn,$sql_order);
if(!$sql_sorted_list)
{
  echo"error";
}

$row=mysqli_fetch_assoc($sql_sorted_list);
foreach($sql_sorted_list as $item)
{
  ?>
  <h1><?= $item['app_name'];?></h1><br><h2>for more details</h2><a href="<?= $item['url'];?>">click here</a>
<?php
}


?>

</div>






</html> 