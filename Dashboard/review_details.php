<html>  
<head>
<style>
        .divScroll {
            overflow: scroll;
            height: 10px;
            width: 10px;
            margin-left: 130px;

            ;

        }
    </style>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;1,500&display=swap" rel="stylesheet"> 




</head>

<body><div class="divScroll"> 


<?php //this is for fetching rating details

$query="SELECT App.app_name ,Rating.rating,Rating.review FROM Rating JOIN App ON Rating.app_id=App.app_id WHERE Rating.user_id= $ls ";
$result=mysqli_query($conn,$query);
if($result)
{ ?>

<h1>Mobile Applications</h1>
     <?php
foreach($result as $li){
?>
<h1><?=$li['app_name']; ?></h1>
<label>Review:</label>
<p><?=$li['review']; ?></p>
<label>Rating:</label>
<p><?= $li['rating'] ?></p> 

<br><br><br>


<?php
}}
else{
    echo "error".mysqli_error($conn);
}

?>




<?php //this is for fetching rating details

$query="SELECT Web.web_name ,Rating.rating,Rating.review FROM Rating JOIN Web ON Rating.web_id=Web.web_id WHERE Rating.user_id= $ls ";
$result=mysqli_query($conn,$query);
if($result)     
{ ?>

<br><br><br>
 <h1>WEb -Applications</h1>
 <?php
foreach($result as $li){
?>
<br>
<
<h1><?=$li['web_name']; ?></h1>
<label for="">Review </label>
<p><?=$li['review']; ?></p>
<label for="">Rating</label>
<p><?= $li['rating'] ?></p>
<br><br>



<?php
}}
else{
    echo "error".mysqli_error($conn);
}

?>
</div>


</body>
</html>