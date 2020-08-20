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
				background:url("images/ag.jpg");
				background-repeat:no-repeat;
				background-size:cover;
				color:#fff;
				font-size:25px;
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
	<h1>Health Officer:</h1>
</tr>
	<tr>
		<th>First Name</th>
		<th> Last Name</th>
		<th>Surname</th>
		<th>ID Number</th>
		<th>Mobile Number</th>
		<th>Email address</th>
		<th>Location</th>
		<th> Delete</th>
	</tr>
	
	<?php
		$query="SELECT * FROM healthworkers";
		$result=mysqli_query($connect,$query);
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			//echo'done..!';
		
		echo'<form action="delete-healthworker.php" method="post">';
		while($row=mysqli_fetch_assoc($result))
		{
			
			echo'<tr> <td>'.$row['first_name'].'</td>
				<td>'.$row['Last_name'].'</td>
				<td>'.$row['sur_name'].'</td>
				<td>'.$row['id_no'].'</td>
				<td>'.$row['mobile_no'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['location'].'</td>
				<td><input type="checkbox" value="'.$row['id_no'].'" name="checkbox[]" />delete</td></tr>';
			
		}
		echo'<table width="100%" cellpadding="1px">
		<td style="float:right;"><input type="submit" name="delete" value="delete" /></td>
		</table>';
		echo'</tr>
		
		
		</form>';
			
			
			
}
		else
		{
			echo'ERROR FAILED...';
		}
	
	?>
	
</table>
<?php

if(isset($_POST['delete']))
{
	$id_no=$_POST['checkbox'];
	foreach($id_no as $delete)
	{
			$query="DELETE FROM healthworkers where id_no='$delete'";
			$result=mysqli_query($connect,$query);
			if($result)
			{
				echo'<script>var a=confirm("deleted from the database....!!!")
					if(a==true)
					{
						window.location.assign("delete-healthworker.php");
					}
					else
					{
						window.location.assign("delete-healthworker.php");
					}
					</script>';
			}
			else{
				echo'<script>alert("ERROR DELETION FAILED!!!!")</script>';
			}
			
	}
}



?>	
		</fieldset>
	</body>
<html>