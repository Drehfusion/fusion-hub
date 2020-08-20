<?php
session_start();
include('configdb.php');
?>


<!DOCTYPE html>
<head>
	<title>ADMIN|PAGE</title>
	<style type="text/css">
	body{
		margin:0;
		padding:0;
		background-image:url('images/adc1.jpg');
		background-repeat:no-repeat;
		background-size:cover;
		
	}
	h3{
		color:gray;
		background-color:pink;
		text-align:center;
		text-transform:uppercase;
		padding:3px;
	}
	#title{
		background-color:white;
		opacity:0.4;
		height:100px;
		display:block;
		width:100%;
	}
	#a{
		height:80px;
		width:80px;

	}
	
	#b{
		height:80px;
		width:80px;
		
		
	}
	.link{
		width:49%;
		float:left;
		height:auto;
		border-right-style:solid;
		border-right-color:white;
		background-color:rgba(0,0,0,0.5);
			
	}
	a{
		display:block;
		color:white;
		background-color:green;
		padding:5px;
		text-decoration:none;
		border-radius:10%;
		margin-bottom:10px;
		margin-left:4px;
		margin-right:4px;
		text-align:center;
		font-size:20px;
		font-family:san-serif;
		text-transform:capitalize;
		font-weight:bold;
	}
	
	</style>
</head>
<body>
<div id="title">
<img src="images/ministry.jpg" alt="logo" id="a" align="left">
<img src="images/ministry.jpg" alt="corts of arms" id="b" align="right">
	<center><h1>WELCOME TO ADMIN PAGE</h1></center>
</div>
<br>
<br>
		<div class="link">
		<h3>HEALTH OFFICER</h3>
		<a href="add-healthworker.php">add officers</a>
		<a href="delete-healthworker.php">delete officers</a>
		<a href="admin-health-report.php">Report</a>
		</div>

		<div class="link">
		<h3>CHILD</h3>
		<a href="index.php">add children</a>
		<a href="delete-child.php">delete child</a>
		<a href="admin-child-report.php">Report</a>
		</div>
		
		
		
		<br>
		<br>
		<br>
		<style type="text/css">
		button
		{
			cursor:pointer;
			border-style:none;
			padding:3px;
		}
		</style>
		<center><form action="admin.php"><button type="submit">lOGOUT</button></form></a></center>
		
</body>
</html>