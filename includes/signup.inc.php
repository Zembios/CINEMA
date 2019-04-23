<?php
session_start();
if(isset($_POST['signup']))
{
	include_once 'dbh.inc.php';
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$username = $_POST['uid'];
	//error handlers
	//check for empty fields
	if((empty($email)||empty($uid)||empty($pwd)) && !filter_var($email,FILTER_VALIDATE_EMAIL))
	{
	    header("Location: ../signup.php?fieldsEmpty");
	}
	else

	{//check if input charachters are valid

		$sql="SELECT * FROM users WHERE user_uid='$uid';";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0)
		{
		  header("Location: ../signup.php?error2");
		}
		else
		{
			//hashing the password
			$hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);
      //insert the user into the database
	    $sql = "INSERT INTO users (user_email,user_uid,user_pwd) VALUES ('$email','$uid','$hashedPwd');";
	    mysqli_query($conn, $sql);
			$_SESSION['u_uid'] = $username;
			$_SESSION['loggedIn'] = true;
	   	header("Location: ../profile.php?asdf");
		}
	}
}
else
{
	header("Location: ../signup.php?error1");//prevent using url to go to website
}
