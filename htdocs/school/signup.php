<?php
require "header.php";
?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Sign up</h1>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="Password" name="pwd" placeholder="Password">
				<input type="Password" name="pwd-repeat" placeholder="PasswordRepeat">
				<button type="submit" name="signup-submit">Signup</button>
			</form>
		</section>
	</div>
</main>
<?php
require "footer.php";
?>