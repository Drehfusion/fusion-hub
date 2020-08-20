<?php
if (isset($_POST['signup-submit'])) {
	
	require 'dph.inc.php';

	$username= $_POST['uid'];
	$email= $_POST['mail'];
	$password= $_POST['pwd'];
	$passwordRepeat= $_POST['pwd-repeat'];
}
if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat))  {

		header("location: ../signup.php?error=emptyfield&uid= ".$username. "&mail=".$email);
exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("location: ../signup.php?error=invalidmail&uid= ");
exit();

}

else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("location: ../signup.php?error=invaliduid&mail=".$email);
exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("location: ../signup.php?error=invalidmail&uid=".$username);
exit();
}

else if ($password !== $passwordRepeat) {
	header("location: ../signup.php?error=passwordcheck&uid= " .$username."$email".$email);
exit();
}
else{

	$sql="SELECT uidUsers FROM users Where uidUsers=?";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location:../signup.php?error=sqlerror");
     exit();
	}
	
	else{
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if($resultCheck > 0){
      header("Location:../signup.php?error=usertaken&mail=");
      exit();
		}
		else{
      $sql="INSERT INTO users (uidusers, email, pwdusers) VALUES (?, ?, ?)";
  }
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
      	header("Location:../signup.php?error=sqlerror");
      	exit();
      }
      else{
      	$hashedpwd=password_hash($password, PASSWORD_DEFAULT);
      	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd );
      	mysqli_stmt_execute($stmt);
      	header("Location:../signup.php?signupsuccess");
      	exit();
      }
		
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}


