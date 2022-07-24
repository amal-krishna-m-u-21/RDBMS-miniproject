
    <?php


//for using in the for fetching data of each app to find avg ,we will increment this app id to find avg of next app with next app id
$lrating;//for storing rating ,after that we will update it to App table 


/* selecting number of distint app id from Rating table to find how many (number)apps do we need to display on the leaderboard */


$sql = "SELECT DISTINCT app_id FROM Rating";
$result = mysqli_query($conn, $sql); //for executing the sql query

$i = mysqli_num_rows($result); //for figuring out the exact number
foreach($result as $app){ 
for ($j = 1; $j < $i; $j++) 
{
 $app_id=$app['app_id'];
  $sql = "SELECT 	app_id,AVG(rating) AS rating FROM  Rating WHERE app_id='$app_id'";   //for fetching average rating of each app frm Rating table when app is a certain value and that value is given using forloop

  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_assoc($result);
  $lrating = $rows['rating'];//storing rating of x app to lrating for updating it along respective apps info in App table
//fetching as associative array 
  if ($rows != 0) 
  {
    $update = "UPDATE App SET  leaderboard_rating='$lrating' WHERE app_id='$app_id'";//updating App table with the average rating of that particualr app
    if (!mysqli_query($conn, $update)) 
    {
      echo "error update".mysqli_error($conn);
    }
       //app id is incremented so that it will check the next apps average rating and update in record of respective app in the table App
  }//closing if 
}//closing for loop of j
}
?>