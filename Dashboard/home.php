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



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;1,500&display=swap" rel="stylesheet"> 


<title>Home</title>
</head>
<body>
   <h1> Interest    List</h1> 
    <div class="divScroll">
<?php 

 $user_id=$_SESSION['login_session'];
 //using JOIN function on junction table
$sql="SELECT Interest.interest_name FROM User_Interest JOIN Interest ON User_Interest.interest_id = Interest.interest_id WHERE User_Interest.user_id=$user_id ";
$result=mysqli_query($conn,$sql);
if($result){ 



foreach($result as $interest)
{
    ?><div class="interest">  
   
         <?= $interest['interest_name']; ?> 
      
      

         </div>        
        
        <?php

}

}
else
{
    echo mysqli_error($conn);
}
?>
</div>

<br><br><br><br>

<label for="">
<a href="../Login_page/interest.php"> Click here </a> to ADD Interest 
</label>
    
    <?php




?>

</body>
</html>