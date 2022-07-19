<?php

$exists = mysqli_query($conn,"SELECT * FROM  Rating WHERE r_id ='1'");
if($exists == FALSE)
{

    $sql ='CREATE TABLE Rating (
        r_id INT(11) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,web_id INT(11) ,app_id INT(11) ,user_id INT(11) NOT NULL,rating FLOAT(5)  DEFAULT "0", review VARCHAR(2048) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )';
      if (mysqli_query($conn, $sql)) 
      {
                                       $flag="created";
          // Inputing Test data into databaseApp description
                                        $sql1 = "INSERT INTO `Rating` (`r_id`, `web_id`, `app_id`, `user_id`, `rating`, `review`, `reg_date`) VALUES (NULL, '1', NULL, '1', '0', 'Testing', current_timestamp()), (NULL, NULL, '1', '1', '0', 'Testing', current_timestamp()),
                                         (NULL, '2', NULL, '1', '0', 'Testing', current_timestamp()), (NULL, NULL, '2', '1', '0', 'Testing', current_timestamp()),
                                         (NULL, '3', NULL, '1', '0', 'Testing', current_timestamp()), (NULL, NULL, '3', '1', '0', 'Testing', current_timestamp()),
                                         (NULL, '4', NULL, '1', '0', 'Testing', current_timestamp()), (NULL, NULL, '4', '1', '0', 'Testing', current_timestamp())";
                                        
                                        
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