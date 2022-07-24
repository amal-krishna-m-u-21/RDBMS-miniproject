<?php

$sql="SELECT Web.url,Web.leaderboard_rating,Web.web_name FROM Web_interest JOIN Web ON Web.web_id=Web_interest.web_id WHERE Web_interest.interest_id='$interest_id' ORDER BY Web.leaderboard_rating DESC";
$result=mysqli_query($conn,$sql);
$noofrows=mysqli_num_rows($result);
if($noofrows != 0){ 
if($result){
    foreach($result as $lb)
    {
        echo "WEB-PAGE  NAME:".$lb['web_name']."<br>"."WEB-PAGE RATING:".$lb['leaderboard_rating'];
        echo"<br><br>";
    }
}}
else{
    echo "NO record Found";
}
?>