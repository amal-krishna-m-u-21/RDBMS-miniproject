<?php 
include('config.php');
include('session.php');
$ui=$_SESSION['login_session'];
$_SESSION['login_session']=$ui;


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

