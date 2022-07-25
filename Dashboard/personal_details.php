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
</head>
<body>
    <header><h1>User Details</h1></header>

    
    
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
    <label>User Name:</label> <br>

    <h5><?= $details['user_name'];?>
</h5><br><br>

    <label>User E-mail:</label><br>
 
    <h5><?= $details['email']; ?></h5><br><br>


     <label>User's DOB:</label><br>
     <h5><?= $details["dob"]; ?></h5><br><br>
    </header>



        <?php
 


        ?>
        <div class="divScroll"> 
       
<header><h1>List item</h1></header>
<header> 
    <P>List new app/websites here </P>
    <br>

    <form action="../Admin_dashboard/List_item/add.php" method="post">
    <label>Select type:</label><br>
    <select name="type" id="type">
        <option value="select">slect</option>
        <option value="1">Mobile APP</option>
        <option value="2">Web Page</option>
    </select><br><br>
    <input type="text" name="item_name" id="item_name" placeholder="Enter Name of the App/web-Page">
  <br>
    <input type="url" name="item_url" id="item" placeholder="Enter the URL">


    <br><br><br>
    <textarea rows="5" cols="20" name="description"  placeholder="Provide description here" required>
</textarea>

<br><br><br>
    <textarea rows="5" cols="20" name="review"  placeholder="Write review here" required>
</textarea>

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
<select name="interest" id="interest">
    <?php 
    $in="SELECT * From Interest WHERE 1";
    $a=mysqli_query($conn,$in);
    $n=mysqli_num_rows($a);

    foreach($a as $interest)

    {  
        ?>

    <option value="<?= $interest['interest_id'];?>"> <?=$interest['interest_name']; ?> </option> 
    
    
    <?php 
 }
?>
</select>
<input class="button" type="submit" value="Done">
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>        

</header>
</div>





</body>
</html>