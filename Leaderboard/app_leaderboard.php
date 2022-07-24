
<html> <?php

$sql="SELECT App.url,App.leaderboard_rating,App.app_name FROM App_interest JOIN App ON App.app_id=App_interest.app_id WHERE App_interest.interest_id='$interest_id' ORDER BY App.leaderboard_rating DESC";
$result=mysqli_query($conn,$sql);
$noofrows=mysqli_num_rows($result);
if($noofrows != 0){ 
if($result){
    foreach($result as $lb)
    {?>

        <section ="webpage">
<h1><?= $lb['app_name']; ?></h1>
<form action="../Rating/app_page.php" method="post">
    <input type="hidden" name="url" value="<?= $lb['url'];?>">
    <input type="hidden" name="name" value="<?= $lb['app_name'];?>">
    <input type="hidden" name="interest" value="<?= $interest_id;?>">
    <input type="submit" value="View More">
</form> 
    </section>




    <?php }
}}
else{
    echo "NO record Found";
}
?>
</html>