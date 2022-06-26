<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     .divScroll{
         overflow:scroll;
         height:400px;
         width: 570px;;

     }
</style>
<title>Document</title>
</head>
<body>
    <header><h1> Interest list</h1> </header><br><br>
    <div class="divScroll">
<?php 

 $user_id=$_SESSION['login_session'];
 //using JOIN function on junction table
$sql="SELECT Interest.interest_name FROM User_Interest JOIN Interest ON User_Interest.interest_id = Interest.interest_id WHERE User_Interest.user_id=$user_id ";
$result=mysqli_query($conn,$sql);
if($result){ 



foreach($result as $interest)
{
    ?>
     <br><br>
     
     <header>
         <?= $interest['interest_name']; ?> 
        </header>
        <br><br>

        
        
        <?php

}

}
else
{
    echo mysqli_error($conn);
}
?>
</div>
<br><br>
<header><a href="../Login_page/interest.php"> Click here </a> to ADD Interest </header>

    <?php




?>

</body>
</html>