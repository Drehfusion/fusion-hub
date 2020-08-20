<?php
	
    error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];

?>

<BODY Bgcolor ="YELLOW" Text = "Navy" onLoad=alert("Welcome")>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  
  <H1 align = "center"><I>Welcome to the Presbyterian University of East Africa [P.U.E.A]</I></H1><HR color = "magenta" size = "5"><Marquee behavior="alternate">Welcome to P.U.E.A.</Marquee>
    <tr>
      <td colspan="13"><p align="center"><img width="143" height="132" src="resultslip_clip_image002.jpg" alt="PUEA Logo" /> <br />
	   <h3 align="center" class="style2 style4">The PRESBYTERIAN UNIVERSITY.</h3>
        <h3 align="center" class="style5">School of Computer Science.</h3>
		
		<p><Table Border = "2"  Width ="20%" cellSpacing = "0"ceellpadding ="0" Bgcolor="silver" bordercolor ="red" align="center">
<TR><TD  Bgcolor ="AQUA"><a href = 'http://localhost/exam/login2.php'><B>CLICK HERE TO GO TO THE LECTURER PORTAL</B></a></TD></TR></Table>
		
        <table> <td> <h4 class="style4"><p><strong><u>STUDENT PORTAL :</u></strong></p></h4></td></table>
      
    </tr>
	

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Login</title>
	</head>

	<body>
		<?php

			if ($userid && $username) {
				echo "You are already logged in as <b>$username</b>. Click <a href = './student.php'>here<a> to go to the Student portal or <a href = './logout.php'>here</a> to log out.";
					
				
			} 
			
		
	
			
			
			else {
			
				$form = "<form action = './login.php' method = 'POST'>
					<table>
						<tr>
							<td>Username:</td>
							<td><input type = 'text' name = 'user' /></td>

						</tr>

						<tr>
							<td>Password:</td>
							<td><input type = 'password' name = 'password' /></td>

						</tr>

						<tr>
							<td></td>
							<td><input type = 'submit' name = 'loginbtn' value = 'Login'/></td>

						</tr>

						<tr>
							<td></td>
							<td><a href = './register.php'>Register</a> | <a href = './forgotpass.php'>Forgot password?</a></td>

						</tr>

					</table>

				</form>";

				if ($_POST['loginbtn']) {
					$user = $_POST['user'];
					$password = $_POST['password'];

					if ($user) {
						if ($password) {
							require("connect.php");

							$password = md5(md5("bsT@k".$password."Fyi^j"));

							$query = "SELECT * FROM users WHERE username = '$user'";
							$query_run = mysql_query($query);
							$numrows = mysql_num_rows($query_run);
							if ($numrows == 1) {
								$row = mysql_fetch_assoc($query_run);
								$dbid = $row['id'];
								$dbuser = $row['username'];
								$dbpass = $row['password'];
								$dbactive = $row['active'];

								if ($password == $dbpass) {
									if ($dbactive == 1) {
										
										$_SESSION['userid'] = $dbid;
										$_SESSION['username'] = $dbuser;
										$_SESSION['sid'] = session_id();

										$time = time();
										$actual_time = date('d M Y @ H:i:s', $time);

										mysql_query("INSERT INTO sessions VALUES ('session_id();', '$dbid', '$dbuser', '$actual_time', '')");

										echo "You have been logged in as $dbuser. Click <a href = './student.php'>here<a> to go to the the Student Portal.";

									} else {
										echo "You must activate your account to login. $form";
									}
									
								} else {
									echo "You did not enter the correct password. $form";
								}
								
							} else {
								echo "The username: <b>$user</b> was not found. $form";
							}
							
							mysql_close();

						} else {
							echo "You must enter your password. $form";
						}
						
					} else {
						echo "You must enter your username. $form";
					}
					
					
				} else {
					echo $form;
				}
			
			}

		?>




</body>

</html>



