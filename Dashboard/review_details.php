<html>  
<head>
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

?>




<?php //this is for fetching rating details

$query="SELECT Web.web_name ,Rating.rating,Rating.review FROM Rating JOIN Web ON Rating.web_id=Web.web_id WHERE Rating.user_id= $ls ";
$result=mysqli_query($conn,$query);
if($result)
{ ?><h3>WEb -Appliations</h3>
 <?php
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

?>
</div>

</body>
</html>