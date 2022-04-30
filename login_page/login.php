<?php
$names=$_POST['name'];
$email=$_POST['email'];
$password2=$_POST['password2'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Udetails";

// Create connection
$conn = mysqli_connect('localhost', 'root','','Udetails');
//$db= mysql_select_db('$conn);
// Check connection\
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO 'Udeatils'.'users' ('names', 'password2', 'email') VALUES ('$names','$password2','$email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>