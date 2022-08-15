<html>  
    <head>

    </head>
    
    <?php
$sql="SELECT * FROM Wating_list WHERE '1'";
$result=mysqli_query($conn,$sql);




?>   
<body><div class="card"> 
    <div class="add"> 
    <h1>Wating List</h1>
<div class="divScroll">
  <div class="table"> 

<section ="waiting_list">  
<table class="rwd-table">
    <tr> 
<th>id</th>
<th>user id</th>
<th>interest id</th>
<th>item name</th>
<th>item type </th>
<th>item url</th><!--
<th>item description</th>-->
<th>item review</th>
<th>item rating </th>
<th>time</th>
<th>Action</th>
<th>Verfied type</th>

<th>status</th>
    </tr>

<?php
foreach($result as $record){if($record['item_type']==1){ $type="Mobile-app";}else{$type="Web-app";}
    ?> <tr>  
<td data-th="id"><?= $record['id']; ?></td>
<td data-th="user id"><?= $record['user_id']; ?> </td>
<td data-th="interest id"><?= $record['interest_id']; ?> </td>
<td data-th="item name"><?= $record['item_name']; ?> </td>
<td data-th="item type"><?=$type; ?> </td>
<td data-th="item url"><a href="<?= $record['item_url']; ?> "><?= $record['item_url']; ?>  </a></td><!--
<td data-th="item description"><?= $record['item_description']; ?> </td>-->
<td data-th="item review"><?= $record['item_review']; ?> </td>
<td data-th="item rating"><?= $record['item_rating']; ?> </td>
<td data-th="time"><?= $record['time']; ?> </td>
<td data-th="Action"><form action="./permision.php" method="post"> 
    <input type="hidden" name="waiting_id" value=" <?= $record['id']; ?>">
    <input type="radio" name="status" value="grant"><i>Yes</i>
 
<br>
   
    <input type="radio" name="status" value="Denid"><i>No</i>
 
</td>
<td data-th="Verfied type">
 <br>
 <input type="radio" name="type" value="Mobile-app"><i>Mob</i>
 
 <br>
 
 <input type="radio" name="type" value="Web-app"><i>Web</i>
 
</td>
     <td data-th="status">
   
    <input type="submit" value="ok">
</form>   
 
 </td >
    
 </tr>
    
    
    <?php
}



?>













</table>

</section>
  </div>
</div>
</div>
</div>
</body>
</html>