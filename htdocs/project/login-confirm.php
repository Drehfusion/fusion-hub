		<?php
 session_start();
$connect=mysqli_connect("localhost", "root", "", "test");
				$host="localhost";
				$user="root";
				$password="";
				$db="test";
	$connect=mysqli_connect("localhost", "root", "", "test");
		$output='';


if(isset($_POST['submit'])){
	
}
	$username=$_POST['username'];
	$password=$_POST['password'];
	
$sql="SELECT * from healthlogin where username='$username' AND password='$password'";

$result=mysqli_query($connect,$sql);
$num=mysqli_num_rows($result);
if($num>0){
	header('location:index.php');
	//echo "<script>alert('You have Logged in')</script>";
	
}
else{
	echo "<script>alert('You have failed to Login')</script>";
	echo '<a href="login.php">Back to homepage</a>';
}

?>