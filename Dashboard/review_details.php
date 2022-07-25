<html>  
<head>
<style>
        .divScroll {
            overflow: scroll;
            height: 400px;
            width: 570px;
            ;

        }
    </style>

</head>

<body>
<?php //this is for fetching rating details

$query="SELECT App.app_name ,Rating.rating,Rating.review FROM Rating JOIN App ON Rating.app_id=App.app_id WHERE Rating.user_id= $ls ";
$result=mysqli_query($conn,$query);
if($result)
{ ?><h3>Mobile Appliations</h3>
<div class="divScroll">  <?php
foreach($result as $li){
?>
<header><?=$li['app_name']; ?></header>
<p><?=$li['review']; ?></p>
<h5><?= $li['rating'] ?></h5>



<?php
}}
else{
    echo "error".mysqli_error($conn);
}

?></div>




<?php //this is for fetching rating details

$query="SELECT Web.web_name ,Rating.rating,Rating.review FROM Rating JOIN Web ON Rating.web_id=Web.web_id WHERE Rating.user_id= $ls ";
$result=mysqli_query($conn,$query);
if($result)
{ ?><h3>Mobile Appliations</h3>
<div class="divScroll">  <?php
foreach($result as $li){
?>
<header><?=$li['web_name']; ?></header>
<p><?=$li['review']; ?></p>
<h5><?= $li['rating'] ?></h5>



<?php
}}
else{
    echo "error".mysqli_error($conn);
}

?></div>

<header>List item</header>
<header> 
<form action="add.php" method="post">
    <select name="type" id="type">
        <option value="select">slect</option>
        <option value="1">Mobile APP</option>
        <option value="2">Web Page</option>
    </select>
    <input type="url" name="item" id="item">

    <h3>Review and Rating</h3>
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
<input class="button" type="submit" value="Done">
</form>


</header>



</body>
</html>