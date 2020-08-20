<?php
 session_start();
	$connect=mysqli_connect("localhost", "root", "", "test");
	$output='';
	$sql="SELECT wardId, wardName 
		FROM wards 
			WHERE constId='".$_POST["const"]."' 
				ORDER BY wardName";
	$result=mysqli_query($connect, $sql);
	$output .='<option value="">Select Ward</option>';

	while($row=mysqli_fetch_array($result)) {
		$output .='<option value="'.$row["wardId"].'">'.$row["wardName"].'</option>';
	}
	echo $output;
?> 