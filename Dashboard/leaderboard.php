<?php
$sql = "SELECT Interest.interest_name,Interest.interest_id FROM User_Interest JOIN Interest ON User_Interest.interest_id = Interest.interest_id WHERE User_Interest.user_id=$user_id ";
$result = mysqli_query($conn, $sql);

?>
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
    <header>
        <h1>Leaderboard</h1>
        <br><br>
        <P><bold> Select an <i>Interest</i> in order to view the <i>Leaderboard</i></bold>
            </i> </P>
    </header><br><br><br><br><br><br>
    <form action="../../Leaderboard/index.php" method="POST">

        <header> <select class="form-select" aria-label="size 1 select example" name="interest" id="interest">
                <option value="">Select A Interest</option>
                <?php foreach ($result as $interest) { ?>
                    <option value="<?= $interest['interest_id']; ?>"><?= $interest['interest_name']; ?> </option>
                <?php
                } ?>

            </select></header>
        <br><br>
        <input class="button" type="submit" value="View Leaderboard">
    </form>
</body>
<html>