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
        <h4 class="style4"><p><strong><u>Please Log in:</u></strong></p>
        </h4>      </td>
    </tr>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Forgot password</title>
	</head>

	<body>
		<?php
			if (!($username && $userid)) {
				if ($_POST['resetbtn']) {
					$user = $_POST['user'];
					$email = $_POST['email'];

					if ($user) {
						if ($email) {
							if ((strlen($email) >= 7) && (strstr($email, "@")) && (strstr($email, "."))) {
								require("connect.php");

								$query = "SELECT * FROM users WHERE username = '$user'";
								$query_run = mysql_query($query);
								$numrows = mysql_num_rows($query_run);

								if ($numrows == 1) {
									$row = mysql_fetch_assoc($query_run);
									$dbemail = $row['email'];

									if ($email == $dbemail) {
										$pass = rand();
										$pass = md5($pass);
										$pass = substr($pass, 0, 13);
										$password = md5(md5("bsT@k".$pass."Fyi^j"));

										mysql_query("UPDATE users SET password = '$password' WHERE username = '$user'");

										$query = "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
										$query_run = mysql_query($query);
										$numrows = mysql_num_rows($query_run);

										if ($numrows == 1) {
											$webmaster = "Sheraton University <admin@sheratonuniversity.ac.ke>";
											$headers = "From: $webmaster";
											$subject = "Your new password";
											$message = "Hello. Your password has been reset. You can get it below.\n";
											$message .= "<b>Password:</b> $pass";

											echo $pass."<br />";

											if (mail($email, $subject, $message, $headers)) {
												echo "Your password has been reset. Please check your email for your new password.";

											} else {
												echo "An error has occurred, your email containing your new password was not sent. Please contact the <a href = './contact.php'>administartor.</a>";
											}
											

										} else {
											echo "An error has occurred and your password was not reset. Please try again later.";
										}

									} else {
										echo "Incorrect username | email combination.";
									}	

								} else {
									echo "The username was not found.";
								}

								mysql_close();

							} else {
								echo "Please enter a valid email address.";
							}
							
						} else {
							echo "Please enter your email.";
						}
						
					} else {
						echo "Please enter your username.";
					}
					
				} else {
					# code...
				}
				
				echo "<form action = './forgotpass.php' method = 'POST'>
					<table>
						<tr>
							<td>Username:</td>
							<td><input type = 'text' name = 'user' /></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type = 'text' name = 'email' /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type = 'submit' name = 'resetbtn' value = 'Reset password' /></td>
						</tr>

					</table>

				</form>";

			} else {
				echo "Please <a href = './logout.php'>log out</a> to view this page.";
			}
			

		?>

	</body>

</html>