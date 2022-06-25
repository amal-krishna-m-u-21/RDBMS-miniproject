<?php 
include('config.php');
include('session.php');
$ui=$_SESSION['login_session'];
$_SESSION['login_session']=$ui;

$exists = mysqli_query($conn,"SELECT * FROM  Interest WHERE interest_id ='1'");
if($exists == FALSE)
{

    $sql ='CREATE TABLE Interest (
        interest_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        interest_name VARCHAR(30) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )';
      if (mysqli_query($conn, $sql)) 
      {
                                       $flag="created";
          // Inputing Test data into database
                                        $sql1 = "INSERT INTO Interest (interest_name) VALUES 
                                        ('Education'),('AI'),('Music'),('OTT'),('IDE'),('Art'),('DIY'),('Entertainment')";
                                        
                                        
                                        if(mysqli_query($conn,$sql1))
                                                                      {
                                                                        $flag="inserted";
                                                                        exit();
                                                                       }
                                                                        else
                                                                              {
                                                                                echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."Insertion problem";
                                                                                exit();
                                                                               }

     } 
      
      else
      {
        echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."Table Creation problem";
        exit();
      }


}
//this table exist
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <button name="prev" id="prev" onclick="window.history.back()">PREV</button>
  <header><h1>
    Find your Interest
</h1>
</header>
<br>
<form action ="insert_interest.php" method ="post">
<!---<form action ="debug.php" method ="post">-->
<?php
$sql_interest = "SELECT * FROM Interest";
$result = mysqli_query($conn,$sql_interest);

if(mysqli_num_rows($result)>0)

{
  foreach($result as $interest)
  {
    ?>

<input type = "checkbox" name = "interestlist[]" value="<?= $interest['interest_id']; ?>"/> 
<?= $interest['interest_name']; ?>
<br>
    <?php
  }
}
else { echo "NO Record Found";}
?>
<button  name="save_multicheckbox" >Submit</button>


</body>
</html>

