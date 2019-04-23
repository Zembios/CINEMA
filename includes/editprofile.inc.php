<?php
session_start();
if(isset($_POST['editDetails']))
{
  include 'dbh.inc.php';
  $newUsername = $_POST['username'];
  $newPassword = $_POST['password'];
  $repPassword = $_POST['repeatpass'];
  $username = $_SESSION['u_uid'];
  if($newPassword != $repPassword){
    header("Location: ../profile.php?passwordsDontMatch");
  }
  else if($newPassword == '' && $newUsername == ''){
      header("Location: ../profile.php?detailsAreEmpty");
  }
  else if ($newUsername != '' && $newPassword == ''){
    $sql="UPDATE users
          SET user_uid = '$newUsername'
          WHERE user_uid = '$username';";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      header("Location: ../profile.php?UsernameChangeUnsuccessful");
    }
    $_SESSION['u_uid'] = $newUsername;
    header("Location: ../profile.php?usernameSuccessfullyChanged");
  }
  else if ($newUsername == '' && $newPassword != ''){
    $hashedPassword= password_hash($newPassword, PASSWORD_DEFAULT);
    $sql="UPDATE users
          SET user_pwd = '$hashedPassword'
          WHERE user_uid = '$username';";
    $result = mysqli_query($conn, $sql);
    if(!$result) {
      header("Location: ../profile.php?PasswordNotSuccessfullyUpdated");
    }
    header("Location: ../profile.php?PasswordSuccessfullyUpdated");
  }
  else if($newPassword != '' && $newUsername != ''){
    $hashedPassword= password_hash($newPassword, PASSWORD_DEFAULT);
    $sql="UPDATE users
          SET user_pwd = '$hashedPassword', user_uid = '$newUsername'
          WHERE user_uid = '$username';";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      header("Location: ../profile.php?DetailsUpdateFailed");
    }
    $_SESSION['u_uid'] = $newUsername;
    header("Location: ../profile.php?PasswordSuccessfullyUpdated");
  }
}
