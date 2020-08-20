<?php
session_start();

?>

<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet"a href="css\style.css"/>
		<link rel="stylesheet"a href="css\font-awesome.min.css"/>
		<script>
			var image=[];
			var i=0;
			var time=6000;
			image[0]="images/unicef2.jpg";
			image[1]="images/ab.jpg";
			image[2]="images/ae.jpg";
			image[3]="images/az.jpg";
			image[4]="images/ag.jpg";
			image[5]="images/aj.jpg";
			image[6]="images/af.jpg";
			
			function change()
			{
				document.getElementById("login-body").background=image[i];
				if(i< image.length -1)
				{
					i++;
				}
				else{
					i=0;
				}
				setTimeout("change()",time);
			}
			window.onload=change;
			
		</script>
	</head>
	<body background="images/unicef2.jpg" id="login-body">
	
	<style type="text/css">
body{
	margin:0 auto;
	background-repeat:no-repeat;
	background-size: 100% 720px;
	}

.container{
	width: 500px;
	height 450px;
	text-align:center;
	margin:0 auto;
	border-radius:49px;
	margin: 0 auto;
	margin-top: 160px;
}

.container img{
	width: 100%;
	height: auto;
	opacity:0.622;
	
}
input 
{
	position:absolute;
	margin-top:-150px;
}


h1{
	margin-top:-270px;
	margin-left:-100px;
	color:cyan;
	text-transform:uppercase;
	text-align:center;
}
form{
	margin-top:200px;
	margin-left:-150px;	
	
}
label
{
	position:absolute;
	letter-spacing:1px;
	word-spacing:2px;
	margin-top:-150px;
	margin-left:-120px;
	color:#fff;
	text-transform:uppercase;
	background-color:gray;
	padding:5px;
	border-radius:5px;
}
input[type="submit"]
{
	background-color:gray;
	letter-spacing:2px;
	color:white;
	cursor:pointer;
	padding:5px;
	border-style:none;
}
input[type="submit"]:hover
{
	color:gray;
	background-color:white;
	font-weight:bold;
}	
input[type="submit"]:active
{
	color:red;
}
</style>
		<div class="container">
		<img src="images\adc1.jpg"/>
		
			<div class="form_input">
				<h1>Health Officer</h1>
				<form method="post" action="login-confirm.php">

					<label>Username</label>
					<input type "text" name="username" placeholder="Username!" required/>
				<br><br>
					<label>Password</label>
					<input type ="password" name="password" placeholder="Enter password!" required />
			<br><br>
					<input type="submit" name="submit" value="Login" class="btn-Login"/>
				</form>
			</div>
		

</body>
</html>	