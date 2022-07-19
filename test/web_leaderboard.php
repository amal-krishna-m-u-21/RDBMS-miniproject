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
    <h1> Leaderboard - web</h1> -->

    <?php


$web_id = 1;//for using in the for fetching data of each web to find avg ,we will update this web id to find avg of next web with next web id
$lrating;//for storing rating ,after that we will update it to web table 


/* selecting number of distint web id from Rating table to find how many (number)webs do we need to display on the leaderboard */


$sql = "SELECT DISTINCT web_id FROM Rating";
$result = mysqli_query($conn, $sql); //for executing the sql query

$i = mysqli_num_rows($result); //for figuring out the exact number
for ($j = 1; $j < $i; $j++) 
{
  $sql = "SELECT 	web_id,AVG(rating) AS rating FROM  Rating WHERE web_id='$web_id'";   //for fetching average rating of each web frm Rating table when web is a certain value and that value is given using forloop

  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_assoc($result);
//fetching as associative array 
  if ($result != 0) 
  {
    $lrating = $rows['rating'];//storing rating of x web to lrating for updating it along respective webs info in web table
    $update = "UPDATE Web SET  leaderboard_rating='$lrating' WHERE web_id='$web_id'";//updating web table with the average rating of that particualr web
    if (!mysqli_query($conn, $update)) 
    {
      echo "error";
    }

    $web_id++;//web id is incremented so that it will check the next webs average rating and update in record of respective web in the table web
  }//closing if 
}//closing for loop of j



$sql_order = "SELECT url,leaderboard_rating,web_name FROM Web ORDER BY leaderboard_rating DESC"; //First sorting the web table according to avg web rating and fetching that data
$sql_sorted_list = mysqli_query($conn, $sql_order);//execution of query
if (!$sql_sorted_list) 
{
  echo "error";
}

foreach ($sql_sorted_list as $item) //using foreach loop fetching each row and displaying it's data accordingly
{
?>
      <h1><?= $item['web_name']; ?></h1><br><!-- Displaying web name -->
      <h2>for more details</h2><a href="<?= $item['url']; ?>">click here</a><!-- For web url -->
    <?php
}


?>

  </div>






  </html>