<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>User Details</h1></header>
    <br><br><br>
    
    
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
<header>
    <label>User Name:</label><?= $details['user_name'];?>
    <br><br>
    <label>User E-mail:</label><?= $details['email']; ?>
    <br><br>
    <label>User's DOB:</label><?= $details['dob']; ?>

    <?= $count; ?>
</header>

        <?php
 


        ?>


</body>
</html>