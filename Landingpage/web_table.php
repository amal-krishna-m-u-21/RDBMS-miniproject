<?php
try{  
$exists = mysqli_query($conn,"SELECT * FROM  Web WHERE 1");
}
catch (Exception $e)
{

    $sql ='CREATE TABLE Web (
        web_id INT(11) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
        web_name VARCHAR(30) NOT NULL, url VARCHAR(2048)  NOT NULL ,description VARCHAR(120)  DEFAULT ("WEB-PAGE") NOT NULL,user_id INT(11) NOT NULL, leaderboard_rating FLOAT(11) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )';
      if (mysqli_query($conn, $sql)) 
      {
                                       $flag="created";
          // Inputing Test data into databaseApp description
                                        $sql1 = "INSERT INTO Web (web_id, web_name, url, description, user_id,leaderboard_rating,reg_date) VALUES 
                                        (NULL, 'Google', 'https://www.google.co.in/', 'Search engine ', '1','0', current_timestamp()),
                                        (NULL, 'Spotify', 'https://www.spotify.com/in-en/', 'Cloud music player', '1', '0', current_timestamp()),
                                        (NULL, 'W3school', 'https://www.w3schools.com/', 'Educational content related to web', '1', '0', current_timestamp()),
                                        (NULL, 'Amazon', 'https://www.amazon.in/', 'Online shopping  application', '1', '0', current_timestamp()),
                                        (NULL, 'Skill share', 'https://join.skillshare.com/learn/?coupon=DTPGOOGEN30DAYSFREE&utm_source=Google&utm_medium=paidsearch&utm_campaign=Croud_Search_Google_AS_IN_EN_BOF_Brand-OLD&utm_term=skillshare&matchtype=e&locale=en&utm_source=Google&utm_medium=paidsearch&utm_campaign=Brand_EN-IN&utm_term=skillshare&matchtype=e&locale=en&gclid=CjwKCAjw5NqVBhAjEiwAeCa97e2vvy9fnL3xzNSa1ivwTqlFhjVj-DZ8oiGUiYYtElTUBkFR_7lSdRoCl0gQAvD_BwE', 'For Educational purpose', '1', '0', current_timestamp())";
                                        
                                        
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