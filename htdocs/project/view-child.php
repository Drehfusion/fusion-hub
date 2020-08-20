<?php
session_start();
include("configdb.php");
if(isset($_POST['registry']))
{
	$name=$_POST['name'];
	$surname=$_POST['surname_of_father'];
	$ornumber=$_POST['original_number'];
	$dob=$_POST['date_of_birth'];
	$mname=$_POST['name_of_mother'];
	$bio=$_POST['bio'];
	$countyname=$_POST['countyName'];
	$constname=$_POST['constName'];
	$wardname=$_POST['wardName'];
	$sex=$_POST['sex'];
	
	$query="INSERT INTO registry values('$name','$surname','$ornumber','$dob','$mname','$bio','$countyname','$constname','$wardname','$sex')";
	$result=mysqli_query($connect,$query);
	if($result)
	{
		echo'<script>alert("done!")</script>';
	}
	else
	{
		echo'<script>alert("ERROR FAILED!")</script>';
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
				background:url("images/ae.jpg");
				background-repeat:no-repeat;
				background-size:cover;
				color:#fff;
				font-size:15px;
				text-transform:capitalize;
				font-weight:bolder;
				
			}input{
				border-style:solid;
			}
			h1:{
				background-color:orange;
				font-color:lightgray;
				font-size:40px;
				font-family:sanserif;

				opacity:0.8;
				colspan:8;
				
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

<Fieldset>
<legend ><strong><em>ADMINISTRATOR</em></strong></legend>
<table border="1px" cellpadding="1px" cellspacing="1px" width="100%">
<tr>
	<h1>Child Details:</h1>
</tr>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Original Number</th>
		<th>Date of birth</th>
		<th>Name of Mother</th>
		<th>Bio</th>
		<th>County</th>
		<th>Constituency</th>
		<th>Ward</th>
		<th>Sex</th>		
	</tr>
	
	<?php
		$query="SELECT * FROM registry";
		$result=mysqli_query($connect,$query);
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			//echo'done..!';
		
		echo'<form action="delete-child.php" method="post">';
		while($row=mysqli_fetch_assoc($result))
		{
			
			echo'<tr> <td>'.$row['name'].'</td>
				<td>'.$row['surname_of_father'].'</td>
				<td>'.$row['original_number'].'</td>
				<td>'.$row['date_of_birth'].'</td>
				<td>'.$row['name_of_mother'].'</td>
				<td>'.$row['bio'].'</td>
				<td>'.$row['countyName'].'</td>
				<td>'.$row['constName'].'</td>
				<td>'.$row['wardName'].'</td>
				<td>'.$row['sex'].'</td>
				
		
		</form>';

	?>
	
</table>

		</fieldset>
	</body>