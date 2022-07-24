<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
     .divScroll{
         overflow:scroll;
         height:400px;
         width: 570px;;

     }
     
</style>
</head>
<body>
    
</body>
</html>
<h1>Web-Pages Leaderboard </h1>
<div class="divScroll">
        <?php

        $sql = "SELECT Web.url,Web.leaderboard_rating,Web.web_name FROM Web_interest JOIN Web ON Web.web_id=Web_interest.web_id WHERE Web_interest.interest_id='$interest_id' ORDER BY Web.leaderboard_rating DESC";
        $result = mysqli_query($conn, $sql);
        $noofrows = mysqli_num_rows($result);
        if ($noofrows != 0) {
            if ($result) {

              
                foreach ($result as $lb) {     ?>

            <section = "webpage">
                <header>

                <form action="../Rating/web_page.php" method="post">
                    <h1><?= $lb['web_name']; ?></h1>
                    <h4>Rating:<?= $lb['leaderboard_rating']; ?></h4>
                    <input type="hidden" name="url" value="<?= $lb['url']; ?>">
                    <input type="hidden" name="name" value="<?= $lb['web_name']; ?>">
                    <input type="hidden" name="interest" value="<?= $interest_id; ?>">
                    <input class="button" type="submit" value="View More">
                </header>
                </form>
            

            </section>
           

            
            <?php    }
            }
        } else {
            echo "NO record Found";
        }
        ?>
        </div>

</html>