<?php
global $conn;
include('config.php');

$names=$_POST['name'];
$email=$_POST['email'];
$password2=$_POST['password2'];
$dob=$_POST['dob'];
$hashedpswd=md5($password2);

$exists = mysqli_query($conn,"SELECT * FROM  User_details WHERE user_id ='1'");

if($exists != FALSE)
{
   echo("This table exists");
}else
{
  $sql = "CREATE TABLE User_details (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,dob DATE NOT NULL ,
    email VARCHAR(30) NOT NULL, password2 VARCHAR(256) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
      
      
      if (mysqli_query($conn, $sql)) {
        $aps = md5("Admin@root001.");
        $sql1 = "INSERT INTO User_details (user_name,dob, password2, email ) VALUES ('root','00-00-0000','$aps','admin@gmail.com')";
         mysqli_query($conn,$sql1);
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myemail = mysqli_real_escape_string($conn,$_POST['email']); 
  if($myemail=="admin@gamil.com")
  { alert("account already exit");
  exit();
  }
  else{
  
  $sql1 = "SELECT user_id  FROM User_details  WHERE  email= '$myemail'";
  $result = mysqli_query($conn,$sql1);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $count = mysqli_num_rows($result);
  if($count== 0){

 
    $sql = "INSERT INTO User_details (user_name,dob, password2, email ) VALUES ('$names','$dob','$hashedpswd','$email')";


if (mysqli_query($conn, $sql)) {
  header("Location:interest.php");
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
}}}
?>
