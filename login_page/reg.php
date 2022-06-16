<?php
global $conn;
$names=$_POST['name'];
$email=$_POST['email'];
$password2=$_POST['password2'];
$dob=$_POST['dob'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project";

// Create connection

$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection\
if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
}
$exists = mysqli_query("select 1 from User_details");

if($exists != FALSE)
{
   echo("This table exists");
}else
{
  $sql = "CREATE TABLE User_details (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,dob DATE NOT NULL,
    email VARCHAR(30) NOT NULL, password2 VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
     $a=1;
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myemail = mysqli_real_escape_string($conn,$_POST['email']); 
  
  $sql1 = "SELECT user_id  FROM User_details  WHERE  email= '$myemail'";
  $result = mysqli_query($conn,$sql1);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  if($count== 0){

$sql = "INSERT INTO User_details (user_name,dob, password2, email ) VALUES ('$names','$dob','$password2','$email')";


if (mysqli_query($conn, $sql)) {
  header("Location:interest.php");
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
