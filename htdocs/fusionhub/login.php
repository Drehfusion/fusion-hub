<? php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>FUSION HUB</title>
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
	<style>
		body{
			background-image: url("typewriter.jpg"); 
		}
	</style>
</head>
<body>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
       <a href="portf.html" class="brand-link">
      <img src="logo.jpg"  class="brand-image img-circle elevation-3 "
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #ffffff;">Fusion Hub</span>
    </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">HOMEPAGE
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACTS</a>
          </li>
            <li class="nav-item">
            <a class="nav-link btn btn-info" href="#" id="button" data-toggle="modal" data-target="#LoginModal">Login</a>
          </li>
        </ul>
    </div>
  </nav>
    <div id="container">
    <div id="main">
      
    </div>
  </div>
  <footer id="footer">
    <p>© 2020</p>
    <p>Privacy Policy</p>
  </footer>
  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style=" top: 0.5em; padding:0.5em 0em;">

    <div class="header">
    	<h2>Login</h2>
    </div>
    <form method="post" action="login.php">
    	<? php echo display_error(); ?>

    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password">
    	</div>
       <div class="input-group">
          <button type="submit" class="btn" name="login_btn">Login</button>
    	</div>
    	<p>
    		Not yet a member? <a href="register.php">Sign up</a>
    	</p>
    </form>
</body>
   <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>