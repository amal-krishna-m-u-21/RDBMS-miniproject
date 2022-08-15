<?php
session_start();
global $conn;
include('config.php');

$names=$_POST['name'];
$email=$_POST['email'];
$password2=$_POST['password2'];
$dob=$_POST['dob'];
$hashedpswd=md5($password2);



if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myemail = mysqli_real_escape_string($conn,$_POST['email']); 
  if($myemail=="admin@gamil.com")
  {    echo '<script type="text/JavaScript">
    if(!alert("Reserved E-mail")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/index.php";
    </script>';

  exit();
  }
  else{
  
  $sql1 = "SELECT user_id  FROM User_details  WHERE  email= '$myemail'";
  $result = mysqli_query($conn,$sql1);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  if($count== 0){

 
    $sql = "INSERT INTO User_details (user_name,dob, password2, email ) VALUES ('$names','$dob','$hashedpswd','$email')";
    $_SESSION['login_user'] = $names;

if (mysqli_query($conn, $sql)) {
  header('Location:interest.php');
exit();
} 

else
{
  echo '<script type="text/JavaScript">
  if(!alert("Insert Dob")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/index.php";
  </script>';

}

mysqli_close($conn);}
else
{   echo '<script type="text/JavaScript">
  if(!alert("Account already exits")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/index.php";
  </script>';

  exit();
}}}
?>
