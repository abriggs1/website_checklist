<?php
  include("config.php");

  $coursedescription = $_POST['coursename'];

  $sql = "INSERT INTO courses (class_name )VALUES ('$coursedescription')";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="insert_sample_data.php" method="post">
       <input type="text" name="coursename" value="">
       <input type="submit" name="submit" value="Submit">
     </form>
   </body>
 </html>
