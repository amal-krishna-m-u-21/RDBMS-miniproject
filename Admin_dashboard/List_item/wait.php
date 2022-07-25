<?php
include('config.php');
include('session.php');
$user_id=$_SESSION['login_session'];
$type=$_POST['type'];//1=mobile,2=web
$item_name=$_POST['item_name'];
$item_url=$_POST['item_url'];
$rating=$_POST['rating'];
$review=$_POST['review'];
$description=$_POST['description'];
$interest=$_POST['interestlist'];
$flag=10;


if($type==1){
    $sql="SELECT * FROM App WHERE url=$item_url ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row != 0){
        $falg="app is already listed";
    }
else{
    $flag=1;
}}
    elseif($type == 2){
        $sql="SELECT * FROM Web WHERE url=$item_url ";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($result);
        if($row !=0){
            $falg="Web is already listed";
        }
        else{
            $flag=1;
        }

    }
    else{
        echo"invalid entry";
    
    }
    if($flag==1)
    { 

foreach($interest as $interest_item)
{
   // echo $interest_item."<br>";
   


             
    $sql =" INSERT INTO Wating_list ( user_id,interest_id,item_name,item_type,item_url,item_description,item_review,item_rating)
    VALUE ($user_id,$interest_item,'$item_name',$type,'$item_url','$description','$review',$rating)";
    $result = mysqli_query($conn,$sql);
    echo mysqli_error($conn);

}
if(!$result){
  
}else{
    $flag="isertion completed";
    header('location:../../Dashboard/dashboard.php');
}
}
else{ 
echo "Item is already listed";
}














?>