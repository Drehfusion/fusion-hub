<?php
session_start();
include('configdb.php');

if(isset($_POST['go']))
{
	$user_no=$_POST['user_no'];
	$password=$_POST['password'];

	$email=$_POST['email'];
	
	
	$query="SELECT * FROM administrator where (user_no=$user_no and password='$password' )";
	$result=mysqli_query($connect,$query);
	$num=mysqli_num_rows($result);
	if($num>0)
	{
		//echo'<script>alert("user found")</script>';
		echo'<script>window.location.assign("adminpage.php")</script>';
	}
	else
	{
		echo'<script>alert("user not found")</script>';
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
	<style type="text/css">
	body
	{
		margin:0;
		padding:0;
		background-color:orange;
	}
	.login-box
	{
		width:50%;
		margin-left:auto;
		margin-right:auto;
		height:500px;
		background-color:rgba(0,0,0,0.3);
		margin-top:100px;
		
		
	}
	#top{
		margin-top:100px;
	}
	
		input[type="text"],input[type="password"]
		{
				margin-bottom:20px;
				width:70%;
				font-size:20px;
				
		}
		#photo{
			height:80px;
			width80px;
			border-radius:50%;
			margin-top:-50px;
		}
		input[type="submit"]
		{
			background-color:white;
			color:gray;
			font-size:15px;
			padding:4px;
			text-transform:capitalize;
			border-radius:2px;
			border-style:none;
			width:30%;
			cursor:pointer;
			
		}
		input[type="submit"]:hover
		{
			color:blue;
			background-color:green;
		}
		input[type="submit"]:active
		{
			color:red;
			background-color:white;
		}
		a{
			text-decoration:none;
			color:white;
			display:block;
			font-weight:bold;
			letter-spacing:2px;
			margin-top:20px;
		}
		a:hover{
			color:red;
		}
		a:active
		{
			color:blue;
		}
		
		
	</style>
</head>
<body>

	
	<div class="login-box">
	<center><img src="images/babra.jpg" alt="admin photo" id="photo"></center>
		<form action="admin.php" method="post">
			<center><input type="text" id="top" name="user_no" value="" autocomplete="off" maxlength="30" required placeholder="ADMIN NAME">
			<br>
			<input type="password" name="password" value="" autocomplete="off" maxlength="30" required placeholder="PASSWORD">		

			<br>
			<input type="submit" name="go" value="log in">	
			<br>
			
			<a href="admin-forgot.php">forgot password?</a>
			</center>
		</form>
	</div>
		
		
	</form>
</body>
</html>