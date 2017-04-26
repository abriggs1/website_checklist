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
         echo "Website will reload in 5 sec....";
         sleep(5);
         header("Refresh:0");
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
     <meta charset="utf-8">
     <title>Register</title>
   </head>
   <body>
     <h1>Register new account</h1>

     <form class="" action="" method="post">
       <label>Username: </label><input type="text" name="reg_username" value=""><br><br>
       <label>Password: </label><input type="text" name="reg_password" value=""><br><br>
       <input type = "submit" value = " Submit "/>
     </form><br>
     <b><p>!!Your account was just successfully added when you get a confirmation!!</p></b>
     <a href="login.php">Back to the Login Page</a>
   </body>
 </html>
