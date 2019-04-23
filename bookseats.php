<?php
session_start();
$counter = 0;

function seats($counter)
{
    for ($i=0; $i <4 ; $i++) {
        echo "<td><div id=$counter class=seat></div></td>";
        ++$counter;
    }
}
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>BookSeats</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
  <?php include("navbar.php"); ?>
  <div class="seats">
      <table>
          <tr>
              <?php
              seats($counter);
              ?>
              <td class="space"></td>
               <?php
              seats($counter);
              ?>
          </tr>
          <tr>
              <?php
              seats($counter);
              ?>
              <td class="space"></td>
               <?php
              seats($counter);
              ?>
          </tr>
          <tr>
               <?php
              seats($counter);
              ?>
              <td class="space"></td>
              <?php
              seats($counter);
              ?>
          </tr>
          <tr>
               <?php
              seats($counter);
              ?>
              <td class="space"></td>
               <?php
              seats($counter);
              ?>
          </tr>
          <tr>
               <?php
              seats($counter);
              ?>
              <td class="space"></td>
               <?php
              seats($counter);
              ?>
          </tr>
          <tr>
               <?php
              seats($counter);
              ?>
              <td class="space"></td>
              <?php
              seats($counter);
              ?>
          </tr>
      </table>
  </div>
  <div class="screen">Screen</div>
  <div class="specifyseat">
      <table>
          <tr>
              <td><div class="selected"><th>-Selected seats</th> </div></td>
              <td><div class="reserved"><th>-Reserved seats </th></div></td>
              <td><div class="free"><th>-Free seats </th></div></td>
           </tr>
       </table>
  </div>
  <div class="schedule">
         <form action="includes/bookseats.inc.php">
          <div class="dt">
            Date:<select id="cmbMake" name="date" >
             <option value="Select Date">Select Date</option>
             <option value="2019-04-01">2019-04-01</option>
             <option value="2019-04-02">2019-04-02</option>
             <option value="2019-04-03">2019-04-03</option>
             <option value="2019-04-04">2019-04-04</option>
             <option value="2019-04-05">2019-04-05</option>
             <option value="2019-04-06">2019-04-06</option>
             <option value="2019-04-07">2019-04-07</option>
           </select>
            Time:<select id="cmbMake" name="time" >
                 <option value="Select Time">Select Time</option>
                 <option value="15:00:00">15:00:00</option>
                 <option value="17:00:00">17:00:00</option>
                 <option value="19:00:00">19:00:00</option>
                 <option value="21:00:00">21:00:00</option>
                 <option value="22:00:00">22:00:00</option>
                 </select>
          </div>
          <div class="book">
              <input type="submit" name="book" value="Send">
          </div>
          </form>
      </div>
  </div>
  <script>
      allSeats = document.querySelectorAll('.seat');
      for (var i = 0; i < allSeats.length; i++) {
          var seat = allSeats[i];
          seat.addEventListener('click', function () {
              var bgclr = this.style.backgroundColor;
              if(bgclr =='green')
                  this.style.backgroundColor = 'white'
              else
                  this.style.backgroundColor = 'green'
              debugger
          }, false);
      }
  </script>
</body>
</html>
