<?php
	$connect=mysqli_connect("localhost", "root", "", "test");
	$output='';
	$sql="SELECT constId, constName, countyId
		FROM constituencies 
			WHERE countyId='".$_POST["county"]."' 
				ORDER BY constName";
	$result=mysqli_query($connect, $sql);
	$output .='<option value="">Select Constituency</option>';

	while($row=mysqli_fetch_array($result)) {
		$output .='<option value="'.$row["constId"].'">'.$row["constName"].'</option>';
	}
	echo $output;
?> 