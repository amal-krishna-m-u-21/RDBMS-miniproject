<?php
include('config.php');
$waiting_id =$_POST['waiting_id'];
$status =$_POST['status'];
echo $status.$waiting_id;


$sql="SELECT * FROM Waiting_list WHERE id=$waiting_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$type=$row['item_type'];
$user_id=$row['user_id'];
$interest=$row['interest_id'];
$item=$row['item_name'];
$item_url=$row['item_url'];
$item_description=$row['item_description'];
$item_review=$row['item_review'];
$item_rating=$row['item_rating'];
$time=$row['time'];



if($type==1)
{
$sql1="SELECT interest_id FROM waiting_list WHERE item_name=$item";      
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
foreach($row1 as $interest_id)
{
if ($status=="grant")
{//insert into app
$sql2="INSERT INTO App (app_name,url,description,user_id,leaderboard_rating,reg_date) VALUES ('$item','$item_url','$item_description',$user_id,$item_rating,$time)";
$result2=mysqli_query($conn,$sql2);

if(!$result)
{

echo"error inserting into app".mysqli_error($conn);


}

else
{
$sql="SELECT app_id FROM App WHERE url='$item_url'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$app_id=$row['app_id'];
//insert into app interest
$sql3="INSERT INTO App_interest (interest_id,app_id,reg_date) VALUES ($interest_id,$app_id,$time) ";
$result3=mysqli_query($conn,$sql3);

if(!$result3)
{

echo"error inserting app interest".mysqli_error($conn);


}

}


}




}



}//end of app type


if($type==2)
{
$sql1="SELECT interest_id FROM waiting_list WHERE item_name=$item";      
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
foreach($row1 as $interest_id)
{
if ($status=="grant")
{//insert into app
$sql2="INSERT INTO Web (web_name,url,description,user_id,leaderboard_rating,reg_date) VALUES ('$item','$item_url','$item_description',$user_id,$item_rating,$time)";
$result2=mysqli_query($conn,$sql2);

if(!$result)
{

echo"error inserting into web".mysqli_error($conn);


}

else
{
$sql="SELECT web_id FROM Web WHERE url='$item_url'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$app_id=$row['web_id'];
//insert into web interest
$sql3="INSERT INTO Web_interest (interest_id,web_id,reg_date) VALUES ($interest_id,$app_id,$time) ";
$result3=mysqli_query($conn,$sql3);

if(!$result3)
{

echo"error inserting web interest".mysqli_error($conn);


}

}


}




}



}//end of web type

















//inputing  app  rating
if($type==1)
{


    if ($status=="grant")
    {

if($app_id!=NULL)
{

    $sql2="INSERT INTO Rating (app_id,user_id,rating,review) VALUES ($app_id,$user_id,$item_rating,'$item_review')";
    $result2=mysqli_query($conn,$sql2);
    if(!$result2)
    {
        $flag="Insertion".mysqli_error($conn);
        echo $flag;
    }



}

    }

}








// inserting web review
if($type==2)
{


    if ($status=="grant")
    {

if($app_id!=NULL)
{

    $sql2="INSERT INTO Rating (web_id,user_id,rating,review) VALUES ($web_id,$user_id,$item_rating,'$item_review')";
    $result2=mysqli_query($conn,$sql2);
    if(!$result2)
    {
        $flag="Insertion".mysqli_error($conn);
        echo $flag;
    }



}

    }

}






$sql4="DELETE FROM Wating_list WHERE item_url='$item_url'";
$result4=mysqli_query($conn,$sql4);
if(!$result4)
{


echo"error deletion".mysqli_error($conn);


}








?>