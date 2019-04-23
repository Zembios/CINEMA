<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CINEMA</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <div class="movies">
      <div class="arrows arrLeft" id="leftArr" onclick="scrollMovies(left)">❮</div>
      <div class="arrows arrRight" id="rightArr" onclick="scrollMovies(right)">❯</div>
    </div>
    <div class="descTitle">
      <h1 id="movieTitle">Movie Title</h1>
    </div>
    <div class="description"><p id="movieDesc">Description of the movie</p></div>
    <div class="btnDiv">
      <button id="btnRedirect" class="btnBook" type="button" name="bookTickets" onclick="location.href = 'bookseats.php';">Book tickets</button>
    </div>
    <script>
      $(document).ready(loadImages());
      $(document).ready(countProps());
      $(document).ready(loadDescription(0));
      // $("#btnRedirect").onclick = function() {
      //   location.href = "bookseats.php";
      // };
    </script>
  </body>
</html>
