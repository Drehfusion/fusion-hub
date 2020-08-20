<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="description" content="This is an example of a meta description. This will often show up in search results">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style1.css">
	<title>
		
	</title>
</head>
<body>
	<header>
		<nav>
			<a href="#">
				<img src="img/kib.jpg" alt="logo">
			</a>
			<ul>

				<li><a href="index.php">HOME</a></li>
				<li><a href="signup.php">REGISTER</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">LECTURER PORTAL</a></li>
			</ul>
			<div>
				<form action="includes/login.inc.php" method="post">
					<?php
                   if (isset($_SESSION['userid'])) {
             	echo '<form action="includes/logout.inc.php" method="post">
             	 <button type="submit" name="login-submit">Log in</button></form>';
             }
             else{
             	echo '<input type="text" name="mailuid" placeholder="Username/E-mail...">
					<input type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form> <a href="signup.php">Sign up</a>';
                  }

					?>
					

			</div>
		</nav>

	</header>

</body>
</html>