<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
  <?php include("navbar.php"); ?>
  <!--<form class="box" action="includes/signin.inc.php" method="post">-->
  <form class="box" action="includes/signin.inc.php" method="post">
    <h1>Log In</h1>
    <input id="usernameInput" type="text" name="username" placeholder="Username/e-email">
    <input id="passwordInput" type="password" name="password" placeholder="Password">
    <input id="SignUpButton" type="submit" name="signin" value="Sign In">
    <a href="SignUp.html">Don't have an account?Sign up!</a>
  </form>
</body>
</html>
