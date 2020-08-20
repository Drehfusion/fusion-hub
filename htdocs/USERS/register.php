<?php

	error_reporting(E_ALL ^ E_NOTICE);

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
		<title>Register</title>
	</head>

	<body>

		<?php

			if ($_POST['registerbtn']) {
				$getuser = $_POST['user'];
				$getemail = $_POST['email'];
				$getpass = $_POST['pass'];
				$getretypepass = $_POST['retypepass'];

				if ($getuser) {
					if ($getemail) {
						if ($getpass) {
							if ($getretypepass) {
								if ($getpass === $getretypepass) {
									if ((strlen($getemail) >= 7) && (strstr($getemail, "@")) && (strstr($getemail, "."))) {
										require("connect.php");
											$query = "SELECT * FROM users WHERE username = '$getuser'";
											$query_run = mysql_query($query);
											$numrows = mysql_num_rows($query_run);

											if ($numrows == 0) {
												$query = "SELECT * FROM users WHERE email = '$getemail'";
												$query_run = mysql_query($query);
												$numrows = mysql_num_rows($query_run);

												if ($numrows == 0) {
													
													$password = md5(md5("bsT@k".$getpass."Fyi^j"));
													$date = date("d F Y");
													$code = md5(md5("Fj6i7".rand()."bW%!l"));

													mysql_query("INSERT INTO users VALUES ('', '$getuser', '$password', '$getemail', '0', '$code', '$date')");

													$query = "SELECT * FROM users WHERE username = '$getuser'";
													$query_run = mysql_query($query);
													$numrows = mysql_num_rows($query_run);
													if ($numrows == 1) {
														
														$site = "http://localhost/Membersys";
														$webmaster = "presbyterian University <admin@pueauniversity.ac.ke>";
														$headers = "From: $webmaster";
														$subject = "Activate your account";
														$message = "Thank you for registering. Click the link below to activate your account.\n";
														$message .= "$site/activate.php?user=$getuser&code=$code\n";
														$message .= "You must activate your account to login.";

														if (mail($getemail, $subject, $message, $headers)) {
															$errormsg = "Your registration was successful. Click <a href = './activate.php'>here<a> to go to Activate your account.";
															$getuser = "";
															$getemail = "";
														} else {
															$errormsg = "An error has occurred. The activation email was not sent.";
														}
														

													} else {
														$errormsg =  "An error occurred. Your account was not created, please try again later.";
													}
													

												} else {
													$errormsg = "The email you have entered already exists.";
												}
											} else {
												$errormsg = "The username you have entered is already taken.";
											}	

										mysql_close();

									} else {
										$errormsg = "You must enter a valid email address to register.";
									}
									
								} else {
									$errormsg = "Your passwords did not match.";
								}
								
							} else {
								$errormsg = "You must enter retype the password to register.";
							}

						} else {
							$errormsg = "You must enter a password to register.";
						}
						
					} else {
						$errormsg = "You must enter your email address to register.";
					}
					
				} else {
					$errormsg = "You must enter a username to register.";
				}
				
			}

			$form = "<form action = './register.php' method = 'POST'>
				<table>
					<tr>
						<td></td>
						<td><font color = 'red'>$errormsg</font></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type = 'text' name = 'user' value = '$getuser'></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type = 'text' name = 'email' value = '$getemail'></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type = 'password' name = 'pass' value = ''></td>
					</tr>
					<tr>
						<td>Retype password:</td>
						<td><input type = 'password' name = 'retypepass' value = ''></td>
					</tr>
					<tr>
						<td></td>
						<td><input type = 'submit' name = 'registerbtn' value = 'Register'></td>
					</tr>

				</table>

			</form>";

			echo $form;

		?>

	</body>

</html>