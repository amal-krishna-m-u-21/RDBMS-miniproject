<html>  
    <head>

    </head>
    
    <?php
$sql="SELECT * FROM Wating_list WHERE '1'";
$result=mysqli_query($conn,$sql);




?>   
<body>
    <h1>Wating List</h1>
<div class="divScroll">
  <div class="table"> 

<section = "waiting_list">  
<table border="1px" border-color="blue" padding="1px" margin= "0.5">
    <tr> 
<th>id</th>
<th>user id</th>
<th>interest id</th>
<th>item name</th>
<th>item type </th>
<th>item url</th>
<th>item description</th>
<th>item review</th>
<th>item rating </th>
<th>time</th>
<th>Action</th>
    </tr>

<?php
foreach($result as $record){if($record['item_type']==1){ $type="Mobile-app";}else{$type="Web-app";}
    ?> <tr>  
<td><?= $record['id']; ?></td>
<td><?= $record['user_id']; ?> </td>
<td><?= $record['interest_id']; ?> </td>
<td><?= $record['item_name']; ?> </td>
<td><?=$type; ?> </td>
<td><?= $record['item_url']; ?> </td>
<td><?= $record['item_description']; ?> </td>
<td><?= $record['item_review']; ?> </td>
<td><?= $record['item_rating']; ?> </td>
<td><?= $record['time']; ?> </td>
<td><form action="permision.php" method="post"> 
    <input type="hidden" name="waiting_id" value=" <?= $record['id']; ?>">
    <input type="radio" name="status" value="grant"><i>Y</i>
 
 </td>
 <td>
   
    <input type="radio" name="status" value="Denid"><i>N</i>
 
 </td>
 <td>
   
    <input type="radio" name="type" value="Mobile-app"><i>M</i>
 
 </td>
 <td>
   
    <input type="radio" name="type" value="Web-app"><i>W</i>
 
 </td>
 <td>
   
    <input type="submit" value="ok">
</form>   
 
 </td>
    
 </tr>
    
    
    <?php
}



?>













</table>

</section>
  </div>
</div>
 
</body>
</html>