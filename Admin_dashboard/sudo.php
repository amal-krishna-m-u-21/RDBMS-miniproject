
<html>
   
   <head>

<link rel="stylesheet" href="./Css/fp.css">
   <style>
      
      .divScroll{
          overflow:scroll;
          max-height:1200px;
          max-width:1200px;;
 
      }
      
 </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;1,500&display=swap" rel="stylesheet"> 


      <title>Admin Dashboard </title>
   </head>
   
   <body>
     
      <?php 
         //session_start();
         include('session.php');
         $ls=$_SESSION['login_session'];
         //fetching details
         $sql="SELECT * FROM User_details WHERE user_id = $ls";
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_assoc($result);
         ?>
        <h1>Admin</h1><div class="divSroll">  
        <?php
         include('add_interest.php');


         ?> 
           
         <?php
         include('add_app.php');
       
         ?> 
  
  

          
      <button> <a href = "../Login_page/logout.php">Sign Out</a> </button>
  
  
  
      </div>
      <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
   </body>
    
</html>
         <?php
      // getting values from form

       $interest=$_POST['interest'];
       //creating table if table dosen't exist
       if($interest != ''){
       $sql1 = "INSERT INTO Interest (interest_name) VALUES 
       ('$interest')";
       
       
       if(mysqli_query($conn,$sql1))
                                     {
                                       $flag="inserted";
                                       exit();
                                      }
                                       else
                                             {
                                               echo "<br> Error : ". "<br>" . mysqli_error($conn) ."<br>"."Insertion problem";
                                               exit();
                                              }

                                             }
                                              
                                              ?> 