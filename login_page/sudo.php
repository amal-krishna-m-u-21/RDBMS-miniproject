
<html>
   
   <head>
      <title>Admin Dashboard </title>
   </head>
   
   <body> 
      <header>
         <h1>Welcome Boss<br>
        
         </h1> 
        </hearder>
        <?php 
         session_start();
         include('session.php');
         $ls=$_SESSION['login_session'];
         //fetching details
       $sql="SELECT * FROM User_details WHERE user_id = $ls";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);

       //getting values from form
       $interest=$_POST['interest'];
       //creating table if table dosen't exist



          ?> 
          <h2><i> Enter new interest</i></h2><br>
          <form action = "sudo.php" method="post" >

          <div class="group">
   <input type="text" name="interest" id="interest" placeholder="interest">
</div>
<div class = "button">
    <input type="submit" value= "ADD">
</div>

   
         </form>

          
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
    
</html>