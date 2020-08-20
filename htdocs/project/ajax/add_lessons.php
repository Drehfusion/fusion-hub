<?php
	function load_dept() {
		$connect=mysqli_connect("localhost", "root", "0ch@m0$3", "pcktti");
		$output='';
		$sql="SELECT deptId, deptName	
			FROM departments 
				WHERE NOT deptId='AD' 
					AND NOT deptId='EP' 
						ORDER BY deptName";
		$result=mysqli_query($connect, $sql);
		while($row=mysqli_fetch_array($result)) {
			$output .='<option value="'.$row["deptId"].'">'.$row["deptName"].'</option>';
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
		<script src="js/dynamic.js"></script>
		<script src="js/lssns.js" /></script>
		<link rel="stylesheet" href="css/main.css">
		<style>
			table th #sbjct, #lect {
				width: 22.5%;
			}
			
			th #durn {
				width: 12.5%;
			}
		</style>
	</head>
	<body>
		<form>
			<p><b>Department: </b>
			<select name="dept" id="dept">
				<option value="">Select Department</option>
				<?php echo load_dept(); ?>
			</select>
			
			<p><b>Course: </b>
			<select name="course" id="course">
				<option value="">Select Course</option>
			</select>
			
			<table id="score">
				<tr>
					<th id="rdo"><h4></h4></th>
					<th id="sbjct"><h4> Subject</h4</th>
					<th id="lect"><h4>Lecturer</h4</th>
					<th id="durn"><h4> Day </h4</th>
					<th id="durn"><h4> From </h4</th>
					<th id="durn"><h4> To </h4</th>
					<th id="durn"><h4> Room </h4</th>
				</tr>
				
				<tr>							
					<td><input type="radio" name="radio"/></td>
					<td>								
						<select name="subject" id="subject">
							<option value="">Select Subject</option>
						</select>
					</td>
					
					<td>								
						<select name="lecturer" id="lecturer">
							<option value="">Select Lecturer</option>
						</select>
					</td>
					
					<td>								
						<select id="day" name="day[]" onblur="check(1)" >
							<option value="" selected="selected"> Day </option>	
							<option value="1"> Mon</option>	
							<option value="2"> Tue </option>	
							<option value="3"> Wed </option>	
							<option value="4"> Thu</option>	
							<option value="5"> Fri </option>	
						</select>
					</td>
					
					<td>								
						<select id="startTime" name="startTime[]" onblur="check(1)" >
							<option value="" selected="selected">From </option>	
							<option value="080000"> 8:00 </option>	
							<option value="103000"> 10:30  </option>	
							<option value="140000"> 2:00 </option>	
							<option value="160000"> 4:00 </option>
						</select>
					</td>
					
					<td>								
						<select id="endTime" name="endTime[]" onblur="check(1)" >
							<option value="" selected="selected"> To </option>	
							<option value="100000"> 10:00 </option>	
							<option value="123000"> 12:30  </option>	
							<option value="160000"> 4:00 </option>	
							<option value="180000"> 6:00 </option>
						</select>
					</td>
					
					<td>								
						<select id="room" name="room[]" onblur="check(1)" >
							<option value="" selected="selected">Select Room </option>	
						</select>
					</td>					
				</tr>
			</table>
			
			<label>
				<ul>
					<li><input type="button"  class="subj" id="add" value="Add Lesson" onclick="addRow('score')" /></li>
					<li><input type="button" class="subj" id="del" value="Delete Lesson" onclick="deleteRow('score')" /></li>
					<li><input type="submit" name="submit" class="subj" id="submit " value="Add Details" /></li>
					<li><input type="reset" name="reset" class="subj" id="rst" value="Clear" onClick="resetForm()" /></li>
				</ul>
			</label>
		</form>
	</body>
<html>