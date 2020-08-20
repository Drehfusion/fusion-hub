<?php

	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];

?>


<BODY Bgcolor ="YELLOW" Text = "Navy" onLoad=alert("GoodBye")>
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
		<title>Logout</title>
	</head>

	<body>

		<?php
			$time = time();
			$actual_time = date('d M Y @ H:i:s', $time);

			if ($userid && $username) {
				session_destroy();

				require("connect.php");

				mysql_query("UPDATE sessions SET session_end = '$actual_time' WHERE username = '$username' AND session_end = ''");

				echo "You have been logged out. Click <a href = './login.php'>here</a> if you wish to log in.";

				mysql_close();

			} else {
				echo "You are not logged in.";
			}
			
		?>

	</body>

</html>