<?php
include('config.php');
include('session.php');
$id=$_POST['id'];
$type=$_POST['type'];
$name=$_POST['user'];
//$web_name=$_POST['web_name'];
//echo $web_name;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review and details</title>
</head>
<body>
    <h1>REVIEWS AND RATINGS </h1>
<section ="reviews">
    <?php 
$sql="SELECT * FROM Rating WHERE web_id =$id ";
$result=mysqli_query($conn,$sql);
if(!$result)
{ echo"error fetching";
}
else 
{
   

    foreach($result as $item)
    {
        $user_id= $item['user_id']; 
        $sql_name="SELECT user_name FROM User_details WHERE user_id=$user_id";
        $user_result=mysqli_query($conn,$sql_name);
        if(!$user_result){
            echo"error";
        }
        else
        {
        $row=mysqli_fetch_assoc($user_result);
        }

?> 
<section = "individual">


<h2>By:<?= $row['user_name'];?></h2>
<h4>Review:</h4>
<p><?= $item['review']; ?></p>
<h4>Rating:</h4>
<h6><?= $item['rating']; ?></h6>
<br>

</section>

    
<?php
    }
}

?>
</section>




    
</body>
</html>