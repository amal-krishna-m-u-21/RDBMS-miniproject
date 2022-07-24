
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
       .divScroll{
         overflow:scroll;
         height:400px;
         width: 570px;;

     }
     
</style>
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<h1>Mobile App Leaderboard </h1>
<div class="divScroll">

    <?php

$sql="SELECT App.url,App.leaderboard_rating,App.app_name FROM App_interest JOIN App ON App.app_id=App_interest.app_id WHERE App_interest.interest_id='$interest_id' ORDER BY App.leaderboard_rating DESC";
$result=mysqli_query($conn,$sql);
$noofrows=mysqli_num_rows($result);
if($noofrows != 0){ 
if($result){
    foreach($result as $lb)
    {?>

        <section ="app">
            <header>

 <form action="../Rating/app_page.php" method="post">
    <h1><?= $lb['app_name']; ?></h1>
    <h4>Rating:<?= $lb['leaderboard_rating']; ?></h4>
    <input type="hidden" name="url" value="<?= $lb['url'];?>">
    <input type="hidden" name="name" value="<?= $lb['app_name'];?>">
    <input type="hidden" name="interest" value="<?= $interest_id;?>">
    <input class="button" type="submit" value="View More">
    </header>
</form> 
    </section>




    <?php }
}}
else{
    echo "NO record Found";
}
?>
    </div>

</html>