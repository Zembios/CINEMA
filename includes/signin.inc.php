<?php
session_start();
if(isset($_POST['signin']))
{
	include 'dbh.inc.php';
	$uid=$_POST['username'];
	$pwd=$_POST['password'];
	//error handlers
	//check if inputs are empty
	if(empty($pwd) || empty($uid))
	{
	header("Location: ../signin.php?login=empty");
  }
    else
  	{
    	$sql="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid';";
    	$result=mysqli_query($conn, $sql);
    	$resultCheck=mysqli_num_rows($result);
    	if($resultCheck > 0)
    	{
				$row = mysqli_fetch_assoc($result);
				$hashedPwdCheck= password_verify($pwd,$row['user_pwd']);
    		if($hashedPwdCheck==false){
				header("Location: ../signin.php?login=error1");
		   	}
		   	elseif($hashedPwdCheck==true)
		   	{
          //log in the user here
          $_SESSION['u_id']=$row['user_id'];
          $_SESSION['email']=$row['user_email'];
          $_SESSION['u_uid']=$row['user_uid'];
					$_SESSION['loggedIn'] = true;
					$_SESSION['uid'] = $uid;
          header("Location: ../profile.php?login=success");
          setcookie("signin",true,0,"/");
    		}
    	}
    	else
    	{
    		header("Location: ../signin.php?login=error2");
    	}
    }
}
else
{
	header("Location: ../signin.php?login=error3");
}
