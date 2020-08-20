<?php
session_start();
include('configdb.php');

if(isset($_POST['registry']))
{
	$county_name="";
	$const_name="";
	$ward_name="";
	$name=$_POST['Name'];
	$surname=$_POST['Surname'];
	$or_number="";
	$d_o_b=$_POST['d_o_b'];
	$gender=$_POST['gender'];
	$Mother=$_POST['Mother'];
	$bio=$_POST['bio'];
	$county_id=$_POST['county'];
	$const_id=$_POST['const'];
	$ward_id=$_POST['ward'];
	
	
	// inserting the data into the database  '$gender'
	$query="SELECT countyName from counties where countyid='$county_id'";
	$result=mysqli_query($connect,$query);
	if($result)
	{	while($row=mysqli_fetch_assoc($result))
		{
			$county_name=$row['countyName'];
		}
			
			
	}
	$query="SELECT constName from constituencies where constid='$const_id'";
	$result=mysqli_query($connect,$query);
	if($result)
	{	while($row=mysqli_fetch_assoc($result))
		{
				$const_name=$row['constName'];
		}
		
	}
	$query="SELECT wardName from wards where wardid='$ward_id'";
	$result=mysqli_query($connect,$query);
	if($result)
	{	while($row=mysqli_fetch_assoc($result))
		{
				$ward_name=$row['wardName'];
		}
		
	}
	
	$query="INSERT INTO registry VALUES('$name','$surname','$or_number','$d_o_b','$Mother','$bio','$county_name','$const_name','$ward_name','$gender')";
	$result=mysqli_query($connect,$query);
	if($result)
	{
		//echo'<script>alert("done uploading to the database....!")</script>';
		header('location:index.php');
	}
	else
	{
		echo'<script>alert("failed uploading to the database....!")</script>';
	}
	
	
}
?>