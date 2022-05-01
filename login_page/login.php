<?php

Global $conn;
$names=$_POST['name'];
$email=$_POST['email'];
$password2=$_POST['password2'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
<<<<<<< HEAD
$conn = mysqli_connect('$severname','$username','','$dbname');
=======
$conn = mysqli_connect('127.0.0.1','root','','test');
>>>>>>> ab64e8dddfe91b56f8d02ce05bcd2fc730a30ef8
//$db= mysql_select_db('$conn);
// Check connection\
if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
}

<<<<<<< HEAD
$sql = "INSERT INTO users ('',names, password2, email') VALUES ('$names','$password2','$email')";
=======
$sql = "INSERT INTO test (names, password2, email) VALUES ('$names','$password2','$email')";
>>>>>>> ab64e8dddfe91b56f8d02ce05bcd2fc730a30ef8

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>