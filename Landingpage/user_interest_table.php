<?php
try{ 
$exists = mysqli_query($conn,"SELECT * FROM  User_Interest WHERE ui_id ='1'");
//if($exists == FALSE)
}
catch (Exception $e)
 {

        $sql ='CREATE TABLE User_Interest (
           ui_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            interest_id INT(11) NOT NULL,user_id INT(11) NOT NULL,
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