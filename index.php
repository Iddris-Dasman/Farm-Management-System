<?php 
    include("connection.php");
    include("login.php")
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="login.php" method="post">
        <input type="text" id="username" name="username" required placeholder="Enter your Username">
        <input type="password" id="password" name="password" required placeholder="Enter your password">
        <input type="submit" class="button" name="submit" value="Login">
      </form> 
    </div>

  </div>
</body>
</html>


