<?php
session_start();
include("config.php");
$ui = $_SESSION['login_session'];

if(isset($_POST['save_multicheckbox']))
{
    $il = $_POST['interestlist'];

foreach($il as $interest_item)
{
   // echo $interest_item."<br>";
   
           $exists = mysqli_query($conn,"SELECT * FROM  User_Interest WHERE ui_id ='1'");
             if($exists == FALSE)
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


             
    $sql = "INSERT INTO User_Interest (interest_id, user_id) VALUES ('$interest_item','$ui')";
    $result = mysqli_query($conn,$sql);


}

if($result)
{
    $_SESSION['status_interest'] = "Inserted succesfully";
    header("location:index.php");
}
else
{
    $_SESSION['status_interest'] = "Not Inserted succesfully";
    header("location:index.php");
    
}

}



?>