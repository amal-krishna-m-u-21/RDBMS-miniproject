
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body> 
      <header>
         <h1>Welcome <br>
        
        <?php 
         session_start();
         include('session.php');
         $ls=$_SESSION['login_session'];
         echo $ls;
    
          ?> 
          
       </h1> 
      </hearder>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
    
</html>