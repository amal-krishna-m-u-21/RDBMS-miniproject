<?php

try{ 
$sql="SELECT * FROM Wating_list WHERE id='1'";
$result=mysqli_query($conn,$sql);
}

//if($result == FALSE)  { 
    catch (Exception $e){ 


$wait="CREATE TABLE Wating_list (id INT(30) UNSIGNED AUTO_INCREMENT  PRIMARY KEY ,
 user_id INT(30) NOT NULL ,interest_id INT(30) NOT NULL,
 item_name VARCHAR(50) NOT NULL , item_type INT(2) NULL  ,
 item_url VARCHAR(2048) NOT NULL ,item_description VARCHAR(2048) NOT NULL , 
 item_review VARCHAR(2048) NOT NULL ,item_rating FLOAT(10) NOT NULL ,
 time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP )";


if(mysqli_query($conn,$wait)){
    $flag="table created";

}
else{
    $flag="table not created";
}
}
/*else
{
    $flag="table already exit";
}*/


  ?>