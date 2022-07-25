<?php
include('config.php');
include('session.php');
$id = $_SESSION['app_page_id'];
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

    <link rel="stylesheet" href="./Css/lb.css">
    <style>
       
       .divScroll
       { margin-left: 10px;
         overflow:scroll;
         height:400px;
         width: 570px;;
         margin-top: 25pxs;

     }
     
     
</style>


</head>
<body>
<button class="button" name="leaderboard" id="leaderboard" onclick="window.location.href='../Dashboard/dashboard.php#Leaderboard'">Home</button>

<section ="reviews">
    <div class="card"> 
        <header>
            <section ="heading"> 
<h1>REVIEWS AND RATINGS </h1>
    </section>
</header>
<div class="divScroll">
    <br><br>
    <?php 
$sql="SELECT * FROM Rating WHERE app_id =$id ";
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



<header>By:<?= $row['user_name'];?></header>
<h5>Review:</h5>
<p><?= $item['review']; ?></p>
<h5>Rating:</h5>
<h6><?= $item['rating']; ?></h6>




    
<?php
$s="SELECT app_name From App where app_id=$id";
$r=mysqli_query($conn,$s);
$ra=mysqli_fetch_assoc($r);
    }
    }


?>
</section>
</div>
</div>
<div class="card"> 

<section ="Review"> 
    <h4>choose your rating</h4>
<h3>Mobile App:<?= $ra['app_name']; ?></h3>
</section>





<form action="rating_app.php" method="post">
<textarea rows="5" cols="20" name="review"  placeholder="Write review here" required>
</textarea>

<input type="hidden" name="app_id" value="<?= $id; ?> ">




<div class="group"> 

<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" name="rating"class="slider" id="myRange" required></div>
  <div class="group"> 
<p>Rating: <span id="demo"></span></p>
</div>
</div>










<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>











<input class="button" type="submit" value="Done">
</form>





</div>

    
</body>
</html>