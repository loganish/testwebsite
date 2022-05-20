<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">
   <div class="content">
      <div id="Header">
         <header>Loganish</header>
      </div>
      <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>
      <a href="logout.php" class="logout">logout</a>
      <a href="login_form.php" class="logout">Login</a>
      <a href="register_form.php" class="logout">Register</a>
   </div>
</div>

</body>
</html>