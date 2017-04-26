<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
  </head>
  <body>
    <h1>Welcome <?php echo $login_session; ?></h1>
    <h2><a href = "logout.php">Sign Out</a></h2>
  </body>
</html>
