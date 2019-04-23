<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CINEMA - Profile</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <div class="content">
      <div class="usernameText">
        <?php echo '<p>' . ucfirst($_SESSION['u_uid']) . '</p>'; ?>
      </div>
      <div class="profilePic">
        <img src="images/monroe.png" alt="Monroe">
        <button type="button" name="button" class="btnChangePic">Change profile pic</button>
      </div>
      <div class="editDetailsDiv">
        <h1>Edit Details</h1>
      </div>
      <div class="editProfile">
        <div class="inputFieldsText">
          <p>New Username:</p>
          <p>Password:</p>
          <p>Repeat Password:</p>
        </div>
        <form class="inputFields" action="includes/editprofile.inc.php" method="post">
          <input type="text" name="username" value="">
          <input type="password" name="password" value="" class="passInput">
          <input type="password" name="repeatpass" value="" class="repeatPass">
          <input type="submit" name="editDetails" value="Save" class="btnSubmit">
        </form>
      </div>
      <div class="reservation">
        <p>Reservation for Movie Name on date dd-mm-yy, time hh:mm</p> <button type="button" name="button" class="btnEdit">Edit</button>
      </div>
      <div class="reservation">
        <p>Reservation for Movie Name on date dd-mm-yy, time hh:mm</p> <button type="button" name="button" class="btnEdit">Edit</button>
      </div>
      <div class="reservation">
        <p>Reservation for Movie Name on date dd-mm-yy, time hh:mm</p> <button type="button" name="button" class="btnEdit">Edit</button>
      </div>
    </div>
  </body>
</html>
