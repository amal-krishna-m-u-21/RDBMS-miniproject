<?php

$exists = mysqli_query($conn,"SELECT * FROM  Web_interest WHERE ui_id ='1'");
if($exists == FALSE)
 {

        $sql ='CREATE TABLE Web_interest (
           id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            interest_id INT(11) NOT NULL,web_id INT(11) NOT NULL,
           reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)';
   if(mysqli_query($conn, $sql))
       {
        $sql = "INSERT INTO Web_interest (interest_id,web_id) VALUES 
        ('1','1'),
        ('2','1'),
        ('3','2'),
        ('4','4'),
        ('6','4'),
        ('7','5'),
        ('8','4'),
        ('1','3'),
        ('2','3'),
        ('3','1'),
        ('6','5'),
        ('7','4'),('8','1')";

  $result = mysqli_query($conn,$sql);
        if($result)
        { $flag="inserted";}else{$flag="unable to insert";}
    
       



        }
       else
       {
          $flag="error";
       }
 }
 ?>