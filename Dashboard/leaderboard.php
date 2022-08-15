
<?php
$sql = "SELECT Interest.interest_name,Interest.interest_id FROM User_Interest JOIN Interest ON User_Interest.interest_id = Interest.interest_id WHERE User_Interest.user_id=$user_id ";
$result = mysqli_query($conn, $sql);

?>
<html>

<head>
    <style>
        .divScroll {
            overflow: scroll;
            height: 400px;
            width: 670px;
            ;

        }
    </style>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;1,500&display=swap" rel="stylesheet"> 









</head>

<body><div class="leader">  
        <h1>Leaderboard</h1>
        <br><br>
        <P>Select an Interest in order to view the Leaderboard
           </P>
 
    <div class="select">  
    <form action="../../Leaderboard/index.php" method="POST">

        <select class="form-select" aria-label="size 1 select example" name="interest" id="interest">
                <option value="">Select A Interest</option>
                <?php foreach ($result as $interest) { ?>
                    <option value="<?= $interest['interest_id']; ?>"><?= $interest['interest_name']; ?> </option>
                <?php
                } ?>

            </select>
            </div>

            <br><br>
        <input class="button" type="submit" value="View Leaderboard">
    </form>
    </div>
 

    <div class="divScroll"> 
       
       <h1>List item</h1>
      
           <P>List new app/websites here </P>
       
       
           <form action="../Admin_dashboard/List_item/wait.php" method="post">
           <label>Select type:</label><br>
           <select name="type" id="type">
               <option value="select">SELECT</option>
               <option value="1">Mobile APP</option>
               <option value="2">Web Page</option>
           </select><br><br>
           <label for="Name">Enter Name of the App/Web Page </label>


           <br>
           <input type="text" name="item_name" id="item_name" placeholder="Enter Name of the App/web-Page">
       
           <br><br><br>
           <label for="Name">Enter Url</label>
           <br>
           <input type="url" name="item_url" id="item" placeholder="Enter the URL">
       
   
           <!--
           <textarea rows="5" cols="20" name="description"  placeholder="Provide description here" required>
       </textarea>
            --><br><br>
       <br>
           <label for="Name">Write review here</label>
           <br>
           <textarea rows="5" cols="20" name="review"  placeholder="Write review here" required>
       </textarea>
       
       <div class="group"> 
       
       <div class="slidecontainer">
         <input type="range" min="0" max="10" value="0" name="rating"class="slider" id="myRange" required></div>
         <div class="group"> 
         <br><br>
           <label for="Name">Provide a Rating</label>
           <br>
       <p>Rating: <span id="demo"></span></p>
       </div>
       </div>
       
       <script>
       var slider = document.getElementById("myRange");
       var output = document.getElementById("demo");
       output.innerHTML = slider.value;
       
       slider.oninput = function() {
         output.innerHTML = this.value;
       }
       </script>
           <?php 
           $in="SELECT * From Interest WHERE 1";
           $a=mysqli_query($conn,$in);
           $n=mysqli_num_rows($a);
       
           foreach($a as $interest)
       
           {  
               ?><br>
      <input type="checkbox"  name = "interestlist[]" value="<?= $interest['interest_id'];?>"> 
      <label for="">
       <?=$interest['interest_name']; ?> </label>      
           
           <?php 
        }
       ?>
       </select><br><br><br>
       <input class="button" type="submit" value="Done">
       </form>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>        
       
    
       </div>










</body>
<html>