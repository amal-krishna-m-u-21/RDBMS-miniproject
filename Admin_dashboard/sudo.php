
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

      // getting values from form

       $interest=$_POST['interest'];
       //creating table if table dosen't exist


       include('add_interest.php'); 

         ?> 
         

          
      <h2><a href = "../Login_page/logout.php">Sign Out</a></h2>
   </body>
    
</html>