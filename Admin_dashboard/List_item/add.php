<?php




if($type==1){ //
    $sql="SELECT * FROM App WHERE url=$item_url ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row >=1){
        $falg="app is already listed";
    }
    else{



        $insert="INSERT INTO App (app_name,url,description,user_id,leaderboard_rating) VALUES('$item_name','$item_url','$description',$user_id,'$rating')";
    }

}
elseif($type==2){

}
else{
    echo"invalid entry";

}


?>