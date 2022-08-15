<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .divScroll {
            overflow: scroll;
            height: 10px;
            width: 10px;
            margin-left: 10px;

            ;

        }
    </style>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;1,500&display=swap" rel="stylesheet"> 



</head>
<body>
    <h1>User Details</h1>
    
    
    
    <?php
$sql = "SELECT * FROM User_details WHERE user_id=$user_id";
$result=mysqli_query($conn,$sql);
if($result){       
    
    $details=mysqli_fetch_array($result);
}  else
{
    echo mysqli_error($conn);
}
?>
<div class="userdetails"> 
       <header>

    <label>User Name:</label>

    <p> <?= $details['user_name'];?></p>
    <br><br>
</header>  <header>

    <label>User E-mail:</label>
 
   <p> <?= $details['email']; ?></p>
   <br><br>
   </header>  <header>
     <label>User's DOB:</label><br>
   <p> <?= $details["dob"]; ?></p>
   <br><br></header>  
</body>
</html>