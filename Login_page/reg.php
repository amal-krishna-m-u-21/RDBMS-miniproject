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
  { header("Location:wrongpswd.php");;
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
  echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."GO back & try Selecting DOb";
}

mysqli_close($conn);}
else
{
  header("location:index.php");
  exit();
}}}
?>
