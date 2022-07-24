<?php

$exists = mysqli_query($conn,"SELECT * FROM  App_interest WHERE ui_id ='1'");
if($exists == FALSE)
 {

        $sql ='CREATE TABLE App_interest (
           id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            interest_id INT(11) NOT NULL,app_id INT(11) NOT NULL,
           reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)';
   if(mysqli_query($conn, $sql))
       {
           $flag="created";
       }
       else
       {
          echo "Error creating table: " . mysqli_error($conn);
       }
 }
 ?>