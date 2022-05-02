<?php
  
   $db = mysqli_connect('127.0.0.1','root','',test);
   session_start();
  

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myeamil = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM test WHERE  email= '$myemail' and password2 = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myeamil and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myemail");
         $_SESSION['login_user'] = $myemail;
         header("location:dashboard.html");
      }else 
      {
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 
echo '<script>alert("Invalid User-email and Password")</script>';
          header ("location:login.html");
      }
   }
?>
