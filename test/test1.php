<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project";


//creating db connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//starting of html file
?>


<!DOCTYPE html>

<head>
  <title>Test file</title>
</head>

<body>
  <div class="container">
    <h1> Leaderboard - App</h1> -->

    <?php


$app_id = 1;//for using in the for fetching data of each app to find avg ,we will update this app id to find avg of next app with next app id
$lrating;//for storing rating ,after that we will update it to App table 


/* selecting number of distint app id from Rating table to find how many (number)apps do we need to display on the leaderboard */


$sql = "SELECT DISTINCT app_id FROM Rating";
$result = mysqli_query($conn, $sql); //for executing the sql query

$i = mysqli_num_rows($result); //for figuring out the exact number
for ($j = 1; $j < $i; $j++) 
{
  $sql = "SELECT 	app_id,AVG(rating) AS rating FROM  Rating WHERE app_id='$app_id'";   //for fetching average rating of each app frm Rating table when app is a certain value and that value is given using forloop

  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_assoc($result);
//fetching as associative array 
  if ($result != 0) 
  {
    $lrating = $rows['rating'];//storing rating of x app to lrating for updating it along respective apps info in App table
    $update = "UPDATE App SET  leaderboard_rating='$lrating' WHERE app_id='$app_id'";//updating App table with the average rating of that particualr app
    if (!mysqli_query($conn, $update)) 
    {
      echo "error";
    }

    $app_id++;//app id is incremented so that it will check the next apps average rating and update in record of respective app in the table App
  }//closing if 
}//closing for loop of j



$sql_order = "SELECT url,leaderboard_rating,app_name FROM App ORDER BY leaderboard_rating DESC"; //First sorting the App table according to avg app rating and fetching that data
$sql_sorted_list = mysqli_query($conn, $sql_order);//execution of query
if (!$sql_sorted_list) 
{
  echo "error";
}

foreach ($sql_sorted_list as $item) //using foreach loop fetching each row and displaying it's data accordingly
{
?>
      <h1><?= $item['app_name']; ?></h1><br><!-- Displaying App name -->
      <h2>for more details</h2><a href="<?= $item['url']; ?>">click here</a><!-- For App url -->
    <?php
}


?>

  </div>






  </html>