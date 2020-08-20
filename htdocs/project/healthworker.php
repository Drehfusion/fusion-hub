<?php
session_start();
include("configdb.php");
if(isset($_POST['registry']))
{
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$surname=$_POST['surname'];
	$idno=$_POST['id_number'];
	$mobile=$_POST['mobile_number'];
	$email=$_POST['email_address'];
	$location=$_POST['location'];
	
	$query="INSERT INTO healthworkers values('$fname','$lname','$surname','$idno','$mobile','$email','$location')";
	$result=mysqli_query($connect,$query);
	if($result)
	{
		echo'<script>alert("done....!!!!")</script>';
	}
	else
	{
		echo'<script>alert("ERROR FAILED....!!!!")</script>';
	}
}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta content="text/html; charset=iso-8859-1" />
		<title>admin</title>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/loc.js"></script>
		<style type="text/css">
			legend{
				color:#fff;
				letter-spacing:2px;
				text-align:center;
				font-size:40px;
				font-weight:bolder;
			}
			body{
				background:url("images/unicef.png");
				background-repeat:no-repeat;
				background-size:cover;
				color:#fff;
				font-size:25px;
				text-transform:capitalize;
				font-weight:bolder;
			td{
				text-transform:capitalize;
			}
			}input{
				border-style:solid;
				text-transform:capitalize;
			}
			input:hover{
				border-color:green;
			}
			input:focus{
				border-color:blue;
			}
			#a{
				width:120px;
				height:100px;
				float:left;
			}
			#b{
				width:120px;
				height:100px;
				float:center;
			}
			#c{
				width:100px;
				height:100px;
				float:right;
				
				
			}
		
		</style>
	</head>
	
	<body>
	<img id="a" src="images\ministry.jpg" alt="logo">
	<img id="b" src="images\unicefb.png" alt="logo">	
	<img id="c" src="images\vision2030.jpg" alt="logo">
	<br>
	<br>
	
	<br>
	<form action="healthworker.php" method="post">
<Fieldset>
<legend ><strong><em>ADMINISTRATOR</em></strong></legend>
<table>
<tr>
	<th>Health Officers</th>
</tr>
	<tr>
		<th>First Name</th>
		<th> Last Name</th>
		<th>Surname</th>
		<th>ID Number</th>
		<th>Mobile Number</th>
		<th>Email address</th>
		<th>Location</th>
	</tr>

	</tr>
	<tr>
		<td > <input type="text" name="first_name" autocomplete="off" required /> </td>
		<td> <input type="text" name="last_name" autocomplete="off" required /> </td>
		<td> <input type="text" name="surname" autocomplete="off" required /> </td>
		<td> <input type="int" name="id_number" autocomplete="off" required/> </td>
		<td> <input type="int" name="mobile_number" autocomplete="off" required/> </td>
		<td> <input type="text" name="email_address" autocomplete="off" required/> </td>
		<td> <input type="text" name="location" autocomplete="off" required/> </td>
		<td> <input type="submit" name="registry" value="ADD"> </td>

	</tr>
			
</table>
</form>
<center><a href="admin.php"><button>lOGOUT</button></a></center>
	
		</fieldset>
	</body>
<html>