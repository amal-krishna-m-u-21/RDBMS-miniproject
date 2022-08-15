
<?php

include('config.php');
session_start();

$email=$_POST['email'];
$password2=$_POST['password2'];
$dob=$_POST['dob'];
$hashedpswd=md5($password2);


  
$sql = "SELECT * FROM User_details WHERE  email= '$email'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count == 1)
{
  $row = mysqli_fetch_assoc($result);
  $udob = $row['dob'];
  

  if(($dob) == $udob) 
  {

    $sql = "UPDATE User_details  SET  password2 = '$hashedpswd' WHERE email='$email'";
$_SESSION['status_paswd']="password reset successfully";
if (mysqli_query($conn, $sql)) {

  echo '<script type="text/JavaScript">
  if(!alert("Password reset successfully .Login")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/logout.php";
  </script>';

exit();
} 
echo '<script type="text/JavaScript">
if(!alert("Technical Error")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/logout.php";
</script>';

echo "<br> Error : ". "<br>" . mysqli_error($conn) ;

  }

else
  {
    

  }
}





?>