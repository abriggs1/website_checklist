<?php
  include("config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($db,$_POST["reg_username"]);
    $password = mysqli_real_escape_string($db,$_POST["reg_password"]);

    if (!$username || !$password) {
      echo "Please input username AND password";
    }
    else {
      
    }

  }//END if statement

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Register</title>
   </head>
   <body>
     <h1>Register new account</h1>

     <form class="" action="" method="post">
       <label>Username: </label><input type="text" name="reg_username" value=""><br><br>
       <label>Password: </label><input type="text" name="reg_password" value=""><br><br>
       <input type = "submit" value = " Submit "/>
     </form>
   </body>
 </html>
