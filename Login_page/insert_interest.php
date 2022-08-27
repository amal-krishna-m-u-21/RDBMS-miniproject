<?php
session_start();
include("config.php");
$ui = $_SESSION['login_session'];

if(isset($_POST['save_multicheckbox']))
{
    $il = $_POST['interestlist'];

foreach($il as $interest_item)
{
   // echo $interest_item."<br>";
   


             
    $sql = "INSERT INTO User_Interest (interest_id, user_id) VALUES ('$interest_item','$ui')";
    $result = mysqli_query($conn,$sql);


}

if($result)
{
    $_SESSION['status_interest'] = "Inserted succesfully";
    echo '<script type="text/JavaScript">
    if(!alert("Interest Added sucessfully!!! ")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/index.php";
    </script>';

}
else
{
    $_SESSION['status_interest'] = "Not Inserted succesfully";
    echo '<script type="text/JavaScript">
    if(!alert("Interest NOt inserted")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/Login_page/index.php";
    </script>';

}

}



?>