<?php

$exists = mysqli_query($conn,"SELECT * FROM  Interest WHERE interest_id ='1'");
if($exists == FALSE)
{

    $sql ='CREATE TABLE Interest (
        interest_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        interest_name VARCHAR(30) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )';
      if (mysqli_query($conn, $sql)) 
      {
                                       $flag="created";
          // Inputing Test data into database
                                        $sql1 = "INSERT INTO Interest (interest_name) VALUES 
                                        ('Education'),('AI'),('Music'),('OTT'),('IDE'),('Art'),('DIY'),('Entertainment')";
                                        
                                        
                                        if(mysqli_query($conn,$sql1))
                                                                      {
                                                                        $flag="inserted";
                                                                        exit();
                                                                       }
                                                                        else
                                                                              {
                                                                                echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."Insertion problem";
                                                                                exit();
                                                                               }

     } 
      
      else
      {
        echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."Table Creation problem";
        exit();
      }


}
?>