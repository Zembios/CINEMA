<?php
session_start();
if(isset($_POST['book']))
{
	include 'dbh.inc.php';
  $date = $_POST['date'];
  $time = $_POST['time'];
  $timeslot = $date . ' ' . $time;
  $userid = $_SESSION['u_id'];
  if($date == 'Select Date'){
    header("Location: ../bookseats.php?PleaseSelectADate");
  }
  else if($time == 'Select Time'){
    header("Location: ../bookseats.php?PleaseSelectTime");
  }
  else{
    $sql = "INSERT INTO reservations
            (timeslot, user_id) VALUES ('$timeslot', '$userid');";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      header("Location: ../bookseats.php?BookingUnsuccessful");
    }
    header("Location: ../bookseats.php?BookingSuccessful");
  }
}
