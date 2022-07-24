<html> <?php

$sql="SELECT Web.url,Web.leaderboard_rating,Web.web_name FROM Web_interest JOIN Web ON Web.web_id=Web_interest.web_id WHERE Web_interest.interest_id='$interest_id' ORDER BY Web.leaderboard_rating DESC";
$result=mysqli_query($conn,$sql);
$noofrows=mysqli_num_rows($result);
if($noofrows != 0){ 
if($result){
    foreach($result as $lb)
    {     ?>

<section ="webpage">
<h1><?= $lb['web_name']; ?></h1>
<form action="../ADD/web_page.php" method="post">
    <input type="hidden" name="url" value="<?= $lb['url'];?>">
    <input type="hidden" name="name" value="<?= $lb['web_name'];?>">
    <input type="hidden" name="interest" value="<?= $interest_id;?>">
    <input type="submit" value="View More">
</form> 
    </section>


<?php    }
}}
else{
    echo "NO record Found";
}
?>



</html>