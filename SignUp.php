<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
  <?php include("navbar.php"); ?>
  <form class="box" action="includes/signup.inc.php" method="POST">
    <h1>Register</h1>
    <input id="emailInput" type="text" name="email" placeholder="E-mail">
    <input id="usernameInput" type="text" name="uid" placeholder="Username">
    <input id="passwordInput" type="password" name="pwd" placeholder="Password">
    <input id="SignUpButton" type="submit" name="signup" value="Sign Up">
    <!--<button type="submit name="submit">Sign up</button>-->
    <a href="">Already have an account?Log in!</a>
  </form>
</body>
</html>
