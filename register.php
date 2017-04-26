<?php
  include("config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($db,$_POST["reg_username"]);
    $password = mysqli_real_escape_string($db,$_POST["reg_password"]);

    if (!$username || !$password) {
      echo "Please input User Name AND Password";
    }
    else {
      $sql = "SELECT ID FROM users WHERE username = '$username'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername, table row must be 1 row

      if($count == 1) {
         echo "This username is already taken. Please choose another one.";
      }
      else {
        $sql = "INSERT INTO users (username,password) VALUES(?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
          echo "Account was succesfully added";
        }
        else {
          echo "An error occurred. The account was not added to our database, please try again later.";
        }
        echo "";
      }
    }
  }//END if statement

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Register new account</title>
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
     <div class="container">
       <h1>Register new account</h1>
       <form class="form-horizontal" action="" method="post">
         <div class="form-group">
           <label class="control-label col-sm-2">Username: </label>
           <div class="col-sm-4">
             <input type="text" name="reg_username" value="" class="form-control" placeholder="Enter username..">
           </div>
         </div>
         <div class="form-group">
           <label class="control-label col-sm-2">Password: </label>
           <div class="col-sm-4">
             <input type="text" name="reg_password" value="" class="form-control" placeholder="Enter pasword..">
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
             <input type = "submit" class="btn btn-default"value = "Submit"/>
           </div>
         </div>
       </form>
       <p style="color: white">!!!Your account was just successfully added when you get a confirmation!!!</p>
       <a href="login.php">Back to the Login Page</a>
     </div>
   </body>
 </html>
