<?php
	function load_county() {
		$connect=mysqli_connect("localhost", "root", "password77", "locations");
		$output='';
		
		$sql="SELECT countyId, countyName 
			FROM counties 
				ORDER BY countyName";
		$result=mysqli_query($connect, $sql);
		$output .='<option value="">Select County</option>';

		while($row=mysqli_fetch_array($result)) {
			$output .='<option value="'.$row["countyId"].'">'.$row["countyName"].'</option>';
		}		
		return $output;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta content="text/html; charset=iso-8859-1" />
		<title>Dymanism with Jquery, Ajax, PHP & MySQL</title>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/loc.js"></script>
	</head>
	<body>
		<p><b>County: </b>
		<select name="county" id="county">
			<option value="">Select County</option>
			<?php echo load_county(); ?>
		</select>
		
		<p><b>Constituency: </b>
		<select name="const" id="const">
			<option value="">Select Constituency</option>
		</select>
		
		<p><b>Ward: </b>
		<select name="ward" id="ward">
			<option value="">Select Ward</option>
		</select>
	</body>
<html>