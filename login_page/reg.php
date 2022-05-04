<?php
global $conn;
$names=$_POST['name'];
$email=$_POST['email'];
$password2=$_POST['password2'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Udetails";

// Create connection

$conn = mysqli_connect('127.0.0.1','root','','test');

// Check connection\
if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myemail = mysqli_real_escape_string($conn,$_POST['email']); 
  
  $sql1 = "SELECT id FROM test WHERE  email= '$myemail'";
  $result = mysqli_query($conn,$sql1);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  if($count== 0){

$sql = "INSERT INTO test(names, password2, email) VALUES ('$names','$password2','$email')";


if (mysqli_query($conn, $sql)) {
  header("Location:intrest.html");
exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);}
else
{
  header("location:login.html");
}}
?>
