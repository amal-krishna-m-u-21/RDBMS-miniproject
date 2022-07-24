<?php
include('config.php');
include('session.php');
$user_id=$_SESSION['login_session'];
$interest_id= $_POST['interest'];
echo $interest_id;
echo $user_id;
 //this is for fetching rating details
 /*
$query="SELECT App.app_name FROM Rating JOIN App ON Rating.app_id=App.app_id WHERE Rating.user_id= $user_id AND Rating.interest_id= $interest_id ";
$result=mysqli_query($conn,$query);
if($result){ 
foreach($result as $li){
    echo $li['app_name'];
    echo"awsome app";
}
}
else{
    echo "error".mysqli_error($conn);
}*/
$sql="SELECT App.url,App.leaderboard_rating,App.app_name FROM App_interest JOIN App ON App.app_id=App_interest.app_id WHERE App_interest.interest_id='$interest_id' ORDER BY App.leaderboard_rating DESC";
$result=mysqli_query($conn,$sql);
if($result){
    foreach($result as $lb)
    {
        echo $lb['app_name'];
    }
}

?>