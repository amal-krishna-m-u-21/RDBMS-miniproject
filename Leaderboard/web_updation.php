
    <?php


    //for using in the for fetching data of each web to find avg ,we will increment this web id to find avg of next web with next web id
    $lrating; //for storing rating ,after that we will update it to App table 


    /* selecting number of distint web id from Rating table to find how many (number)apps do we need to display on the leaderboard */


    $sql = "SELECT DISTINCT web_id FROM Rating";
    $result = mysqli_query($conn, $sql); //for executing the sql query

    $i = mysqli_num_rows($result); //for figuring out the exact number
    foreach ($result as $web) {
      for ($j = 1; $j < $i; $j++) {
        $web_id = $web['web_id'];
        $sql = "SELECT 	web_id,AVG(rating) AS rating FROM  Rating WHERE web_id='$web_id'";   //for fetching average rating of each web frm Rating table when web is a certain value and that value is given using forloop

        $result = mysqli_query($conn, $sql);

        $rows = mysqli_fetch_assoc($result);
        $lrating = $rows['rating']; //storing rating of x web to lrating for updating it along respective apps info in App table
        //fetching as associative array 
        if ($rows != 0) {
          $update = "UPDATE Web SET  leaderboard_rating='$lrating' WHERE web_id='$web_id'"; //updating App table with the average rating of that particualr web
          if (!mysqli_query($conn, $update)) {
            echo "error update" . mysqli_error($conn);
          }
          //web id is incremented so that it will check the next apps average rating and update in record of respective web in the table App
        } //closing if 
      } //closing for loop of j
    }
    ?>