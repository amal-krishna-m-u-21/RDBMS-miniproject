<?php

$exists = mysqli_query($conn,"SELECT * FROM  App WHERE app_id ='1'");
if($exists == FALSE)
{

    $sql ='CREATE TABLE App (
        app_id INT(11) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
        app_name VARCHAR(30) NOT NULL, url VARCHAR(2048)  NOT NULL ,description VARCHAR(120) NOT NULL,user_id INT(11) NOT NULL,leaderboard_rating FLOAT(11) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )';
      if (mysqli_query($conn, $sql)) 
      {
                                       $flag="created";
          // Inputing Test data into databaseApp description
                                        $sql1 = "INSERT INTO App (app_id, app_name, url, description, user_id, leaderboard_rating, reg_date) VALUES 
                                        (NULL, 'WhatApp', 'https://play.google.com/store/search?q=whatsapp&c=apps', 'Social media ', '1', '0', current_timestamp()),
                                        (NULL, 'Discord', 'https://play.google.com/store/apps/details?id=com.discord', 'For networking', '1', '0', current_timestamp()),
                                        (NULL, 'Youtube', 'https://play.google.com/store/apps/details?id=com.google.android.youtube', 'Stream free video', '1', '0', current_timestamp()),
                                        (NULL, 'Instagram', 'https://play.google.com/store/apps/details?id=com.instagram.android', 'Social media application', '1', '0', current_timestamp()),
                                        (NULL, 'Pinterest', 'https://play.google.com/store/apps/details?id=com.pinterest', 'For creativity', '1', '0', current_timestamp())";
                                        
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