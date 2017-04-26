<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT ID FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;

         header("location: form.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="bootstrap.css">
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
     <div class="container">
       <h1>Login</h1>
       <form class="form-horizontal" action = "" method = "post">
        <div class="form-group">
          <label class="control-label col-sm-2">Username:</label>
          <div class="col-sm-4">
            <input type = "text" name = "username" class = "form-control" placeholder="Enter Username.."/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Password:</label>
          <div class="col-sm-4">
            <input type = "password" name = "password" class = "form-control" placeholder="Enter Password.."/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type = "submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
      <p>Click<a href="register.php"> Here</a> to register a new account.</p>
    </div>
  </body>
</html>
