<?php //this is for fetching rating details

$query="SELECT App.app_name FROM Rating JOIN App ON Rating.app_id=App.app_id WHERE Rating.user_id= $ls ";
$result=mysqli_query($conn,$query);
if($result){ 
foreach($result as $li){
    echo $li['app_name'];
    echo"awsome app";
}
}
else{
    echo "error".mysqli_error($conn);
}

?>