
<html>
   
   <head>

<link rel="stylesheet" href="./Css/fp.css">
   <style>
      
      .divScroll{
          overflow:scroll;
          max-height:4000px;
          max-width:1000px;;
 
      }
      
 </style>

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
         <section =" starting"><h1>Admin</h1></section><div class="divSroll">  
         <section ="add interest" > <?php
         include('add_interest.php');


         ?> 
            </section>
         <?php
         include('add_app.php');
       
         ?> 
  
  

          
      <h2><a href = "../Login_page/logout.php">Sign Out</a></h2>
  
  
  
      </div>
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