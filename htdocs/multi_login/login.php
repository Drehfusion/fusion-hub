<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet"  href="styles.css">
	<style>
		body{
			background-image: url("125.jpg");
		}
	</style>
</head>
<body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
       <a href="index3.html" class="brand-link">
      <img src="logo.jpg"  class="brand-image img-circle elevation-3 "
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #ffffff;">Bonfires Adventures and Events Limited</span>
    </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-info" href="#" id="button" data-toggle="modal" data-target="#LoginModal">Login</a>
          </li>

        </ul>
      
    </div>
  </nav>
  <section>
   <header>
  <h1><center>Travel Across Kenya</center></h1>
  <p><b><center>Our Attractive Sites</center></b></p>
  <div class="input-group">
   <input type="text" class="form-control" placeholder="Search Destination Sites">
  </div>
  <div class="input-group-append">
  <button type="Submit" class="input-group-text btn">Search</button>
  </div>
  </header>	
  <section class="Features">
  	<h1><center>Featured Destinations</center></h1>
  	<div class="container">
  	<div class="row">
  		<div class="col-md-4">
  			<div class="Feature-box">
  			<div class="Feature-img">
  				<img src="1.jpg">
  				<div class="price">
  					<p> Tsavo-7800</p>
  				</div>
  				<div class="rating">
  					<i class="star 2.png"></i>
  					<i class="star 2.png"></i>
  					<i class="star 2.png"></i>
                    <i class="half-star .png"></i>
  				</div>
  			</div>
  			<div class="Feature-details">
  				<h4>Tsavo</h4>
                 <p>One of the most exciting destination places ever.The one place one should try to visit</p>
                <span><i class="star"></i>Tsavo</span>
                <span><i class="sun.png"></i>4 Days</span>
                <span><i class="moon.png"></i>3 Nights</span>
  			</div>	
  			</div>
  		</div>
  		<div class="col-md-4"></div>
  		<div class="Feature-box">
  			<div class="Feature-img">
  				<img src="10.jpg">
  				<div class="price">
  					<p> Serengeti-8800</p>
  				</div>
  				<div class="rating">
  					<i class="star 2.png"></i>
  					<i class="star 2.png"></i>
  					<i class="star 2.png"></i>
                    <i class="half-star .png"></i>
  				</div>
  			</div>
  			<div class="Feature-details">
  				<h4>Serengeti</h4>
                 <p>One of the most exciting destination places ever.The one place one should try to visit</p>
                <span><i class="star"></i>Tsavo</span>
                <span><i class="sun.png"></i>4 Days</span>
                <span><i class="moon.png"></i>3 Nights</span>
  			</div>	
  			</div>
  		<div class="col-md-4"></div>
  		<div class="Feature-box">
  			<div class="Feature-img">
  				<img src="13.jpg">
  				<div class="price">
  					<p>Ole Sereni-8800</p>
  				</div>
  				<div class="rating">
  					<i class="star 2.png"></i>
  					<i class="star 2.png"></i>
  					<i class="star 2.png"></i>
                    <i class="half-star .png"></i>
  				</div>
  			</div>
  			<div class="Feature-details">
  				<h4>Ole Sereni</h4>
                 <p>One of the most exciting destination places ever.The one place one should try to visit</p>
                <span><i class="star"></i>Tsavo</span>
                <span><i class="sun.png"></i>4 Days</span>
                <span><i class="moon.png"></i>3 Nights</span>
  			</div>	
  			</div>
  	</div>	
  	</div>
  </section>
  <section class="Gallery">
  	<h1>Travelling gallery</h1>
  	<div class="container">
  	 <div class="row">
  	 	<div class="col-md-3">
  	 	<div class="Gallery-box">
  	 	<img src="1.jpg">	
  	 	<h4>Tsavo</h4>
  	 	</div> 
  	 	</div>
  	 </div>
  	   	 	<div class="col-md-3">
  	 	<div class="Gallery-box">
  	 	<img src="10.jpg">	
  	 	<h4>Serengneti</h4>
  	 	</div> 
  	 	</div>
  	 	<div class="col-md-3">
  	 	<div class="Gallery-box">
  	 	<img src="13.jpg">	
  	 	<h4>Ole Sereni</h4>
  	 	</div> 
  	 	</div>
  	 </div>
  	 </div>
  	</div>
  </section>
  <section class="banner">
  	 <div class="banner-highlights">
  	 	<div class="container">
  	 	<div class="row">
  	 		<div class="col-md-8">
  	 			<h2>Get 10% on all destiantions</h2>
  	 			<p>Book your tickets before 31st April and avail 10% flat discount.</p>
  	 		</div>
  	 		<div class="col-md-4">
  	 			<button type="button" class="booking-btn">Book Now</button>
  	 		</div>
  	 	</div>	
  	 	</div>
  	 </div>
  </section>
  <section class="users-feedback"></section>
  <h1>Users Review</h1>
  <div class="container">
  <div class="row">
  	<div class="col-md-4">
  	</div>
    <div class="col-md-4"></div>  		
    <div class="user-review">
  	<div class="col-md-4">  		
  	</div>
  </div>
  </div>
  </section>
  <section class="footer">
  	<div class="container">
  	<div class="row">
  		<div class="col-md-3">
  		<div class="col-md-3">
  		<h4>Features</h4>
  		<p>Deals & Offers</p>
  		<p>Customers Reviews</p>
  		<p>Cancellation Policy</p>	
  		</div>
  		<div class="col-md-3">
  		<h4>Quick Contact</h4>
  		<p><i class="phone.png">0738547894</p>
  		<p><i class="envelope.png">hudson@gmail.com</p>
  		<p><i class="home.png">City plaza</p>		
  		</div>
  		<div class="col-md-3">
  		<h4>Follow Us on</h4>
  	    <p><i class="facebook.png">facebook</p>
  		<p><i class="youtube.png">youtube</p>
  		<p><i class="twitter.png">twitter</p>
  		</div><hr>
  		<p class="copyright">Made with<i class="twitter.png"></i>Hardept</p>
  	</div>	
  	</div>
  </section>
  <!--login form-->
  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style=" top: 3.5em; padding:3.5em 4em;">



		<div class="header">
		<h2>Login</h2>
	</div>
	<div class="">
		<form method="post" action="login.php">

			<?php echo display_error(); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
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
	</div>

    </div>
  </div>
</div>







	
</body>

   <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>