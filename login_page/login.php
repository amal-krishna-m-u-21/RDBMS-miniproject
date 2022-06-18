<?php
  include('config.php');
   session_start();
  

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM User_details WHERE  email= '$myemail'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      if($count == 1)
      {
        $row = mysqli_fetch_assoc($result);
        $upass = $row['password2'];
        

        if(md5($mypassword) == $upass) {
         $un = $row['user_name'];
         $_SESSION['login_user'] = $un;
         header("location:dashboard.php");

        }
        else
        {
           header("location:wrongpswd.php");
         
        }

     }

     else
        {
           header("location:wrongpswd.php");
        }
   }
?>
