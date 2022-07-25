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
  <link rel="stylesheet" href="../Password_reset/Css/fp.css">
  <style>
       

       .divScroll::-webkit-scrollbar {
  display: none;
}
       .divScroll{
         overflow:scroll;
         height:400px;
         width: 570px;
         -ms-overflow-style: none; 
  scrollbar-width: none;  

     }

     .background-image{

background-image: url('./lib.jpg') ;
background-size:cover;
width: 800px;
height:480px;

}
     
</style>
  <title>Interest</title>
</head>
<body>

<button class="button" name="prev" id="prev" onclick="window.history.back()">PREV</button>
<div class="card">   
  <div class="background-image"> 
  <header><h1>
    Find your Interest
</h1>
</header>
<br>
<form action ="insert_interest.php" method ="post">
<!---<form action ="debug.php" method ="post">-->
  <div class="divScroll">  
<?php
$sql_interest = "SELECT * FROM Interest";
$result = mysqli_query($conn,$sql_interest);

if(mysqli_num_rows($result)>0)

{
  foreach($result as $interest)
  {
    ?>
<div class="group">  
<input type = "checkbox" name = "interestlist[]" value="<?= $interest['interest_id']; ?>"/> 
<?= $interest['interest_name']; ?>
<br>
</div>
    <?php
  }
}
else { echo "NO Record Found";}
?>
<br>
</div>

</div>
</div>
<button  class="button" name="save_multicheckbox" >Confrim</button>
</body>
</html>

