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

$conn = mysqli_connect($servername,$username,$password);

// Check connection\
if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
}



// Change db to "test" db
mysqli_select_db($conn, "Udetails");

// Return name of current default database
$result = mysqli_query($conn, "SELECT DATABASE()");
if (!$result)
{
  $sql = "CREATE DATABASE Udetails";
  mysqli_query($conn, $sql);

}

$exists = mysql_query("select 1 from Udetails");

if($exists == FALSE)
{
  $sql = "CREATE TABLE Udetails (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,  password2 VARCHAR(30) NOT NULL,
    
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
  
  $sql1 = "SELECT user_id  FROM Udetails  WHERE  email= '$myemail'";
  $result = mysqli_query($conn,$sql1);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  if($count== 0){

$sql = "INSERT INTO Udetails (user_name, password2, email ) VALUES ('$names','$password2','$email')";


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
