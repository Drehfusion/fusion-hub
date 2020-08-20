<?php
session_start();
include('configdb.php');

if(isset($_POST["go"]))
{
	$no=$_POST['id'];
	$query="SELECT * FROM administrator where id_no=$no";
	$result=mysqli_query($connect,$query);
	$num=mysqli_num_rows($result);
	if($num>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$re=$row['password'];
			$name=$row["name"];
			$space='  ';
		}
		echo'<script> var a= confirm("'.$name.$space.$re.'")
		if(a==true)
		{
			window.location.assign("admin.php");
			
		}
		
		</script>';
	}
}
?>
<!DOCTYPE hmtl>
	<html>
<head>
	<title>FORGOT PASSWORD</title>
</head>
<?php
	echo'
	<form action="admin-forgot.php" method="post">
	
	<input type="text" name="id" placehoder="ENT
	
	
	
	ER ID NUMBER" required autocomplete="off">
	
		<input type="submit" name="go" value="get">
		</form>';

?>
</html>