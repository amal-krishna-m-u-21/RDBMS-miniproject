
<?php

$sql="SELECT App.url,App.leaderboard_rating,App.app_name FROM App_interest JOIN App ON App.app_id=App_interest.app_id WHERE App_interest.interest_id='$interest_id' ORDER BY App.leaderboard_rating DESC";
$result=mysqli_query($conn,$sql);
$noofrows=mysqli_num_rows($result);
if($noofrows != 0){ 
if($result){
    foreach($result as $lb)
    {
        echo "APP NAME:".$lb['app_name']."<br>"."APP RATING:".$lb['leaderboard_rating'];
        echo"<br><br>";
    }
}}
else{
    echo "NO record Found";
}
?>