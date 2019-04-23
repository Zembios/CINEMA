<div class="nav-top">
  <div class="navLeft">
    <div class="about"><a href="aboutus.php">About Us</a></div>
    <div class="line">|</div>
    <div class="contact"><a href="contactus.php">Contact Us</a></div>
  </div>
  <div class="title"><a href="home.php">CINEMA</a></div>
  <div class="navRight">
    <?php
    if(!isset($_SESSION["loggedIn"])){
      echo "<div class='SignIn'><a href='SignIn.php'>Log In</a></div>
      <div class='line'>|</div>
      <div class='SignUp'><a href='SignUp.php'>Sign Up</a></div>";
    }
    else{
      echo '<div class="profilePicNav"><a href="profile.php"><img src="images/monroe.png" alt="Monroe"></a></div>
      <div class="usernameDiv"><a href="profile.php">' . ucfirst($_SESSION['u_uid']) . '</a></div>
      <div class="line">|</div>
      <div class="logout"><a href="includes/logout.inc.php">Log Out</a></div>';
    }
    ?>
  </div>
</div>
