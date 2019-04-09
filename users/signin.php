
<?php
session_start();
if(!empty($_SESSION["error"]))
{
	$msg=$_SESSION["error"];

	session_destroy();
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Wowphotos a Ecommerce Category Flat Bootstarp Responsive Website Template | Signin :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wowphotos Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>

</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="header-right">
			<div class="hea-rig">
			<ul class="icon1 sub-icon1">
             <li><a href="index.php">Home</a></li>
                 
				<li><a href="signin.php">Login</a></li>
               <li><a href="#">Contact</a></li>
				<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="head-nav">
						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 
				</div>
				<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="header-bottom" style="background-image:url(../Photographer/images/ban3.jpg)">
	<div class="container">
		<div class="logo">
			<a href="index.php">Snap<span style="color:#EF0F13">SHOT</span></a></a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- header -->
<div class="banner">
<h1><marquee behavior="scroll">Welcome To <span style="color:#020202">Snap<span style="color:#EF0F13">SHOT</span>
</marquee></h1>
		<div class="container">
			<div class="account_grid">
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h3 style="color:#F31317">NEW CUSTOMERS</h3>
					<p style="color:#F4EFEF">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					
                    <a class="acount-btn" href="Customer.php">New Registeration</a>
                
			   </div>
			   <div class="col-md-4 login-right wow fadeInRight col-sm-push-2" data-wow-delay="0.4s" style="color:#736E6E">
					<h3 style="color:#F18F13">REGISTERED CUSTOMERS</h3>
					<p style="color:#F4EFEF">If you have an account with us, please log in.</p>
                    <label style="color:#F30408"><?php if(!empty($msg)) echo $msg; ?></label>
                   
					<form action="login.php" method="post">
                
						<div>
							<input style="height:40px; font-size:14px;" type="text"  name="uname" placeholder="Username"> 
						</div>
						<div>
							<input style="height:40px; font-size:14px; text-align:left;" type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" placeholder="Password" required > 
						</div>
						<a style="color:#F4EFEF" class="forgot" href="#">Forgot Your Password?</a>
						<input type="submit" name="log_in" value="Login">
                         
					</form>
                  
			   </div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <!-- millons -->
<div class="millons">
	<div class="container">
		<div class="col-md-4 billon">
			<i class="ima"></i>
			<h4>Millions of images</h4>
			<p>Lorem ipsum dolor sit amet, consectetextur adipiscing elit. Donec id augue in nusd s  nc rutextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui. Sed sollicitudin veneluctus iaculis augue et iaculis. </p>
		</div>
		<div class="col-md-4 billon">
			<i class="ban"></i>
			<h4>Image Bank</h4>
			<p>Lorem ipsum dolor sit amet, consectetextur adipiscing elit. Donec id augue in nusd s  nc rutextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui. Sed sollicitudin veneluctus iaculis augue et iaculis. </p>
		</div>
		<div class="col-md-4 billon">
			<i class="art"></i>
			<h4>A world of artists</h4>
			<p>Lorem ipsum dolor sit amet, consectetextur adipiscing elit. Donec id augue in nusd s  nc rutextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui. Sed sollicitudin veneluctus iaculis augue et iaculis. </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- millons -->
<!-- socc -->
<div class="socc">
	<div class="container">
		<div class="col-md-4 soccer">
			<div class="view effect">
				<a href="#"><img src="images/1.jpg" class="img-responsive" alt=""></a>
			</div>
			<h4>About us</h4>
		</div>
		<div class="col-md-4 soccer">
			<div class="view effect">
				<a href="products.php"><img src="images/2.jpg" class="img-responsive" alt=""></a>
			</div>
			<h4>Seasonal Collection </h4>
		</div>
		<div class="col-md-4 soccer">
			<div class="view effect">
				<a href="#"><img src="images/3.jpg" class="img-responsive" alt=""></a>
			</div>
			<h4>Featured portfolio</h4>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- socc -->
<!-- youre -->
<div class="youre">
	<div class="container">
		<h5>YOU’RE NOT ALONE</h5>
		<div class="you-top">
			<li><img src="images/b1.png" class="img-responsive" alt=""></li>
			<li><img src="images/b2.png" class="img-responsive" alt=""></li>
			<li><img src="images/b3.png" class="img-responsive" alt=""></li>
			<li><img src="images/b4.png" class="img-responsive" alt=""></li>
			<li><img src="images/b5.png" class="img-responsive" alt=""></li>
			<li><img src="images/b6.png" class="img-responsive" alt=""></li>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- youre -->
<!-- footer-bottom -->
<div class="footer-bottom">
	<div class="container">
		<p>Copyrights © 2015 Wowphotos All rights reserved | Template by <a href="http://w3layouts.com/">&nbsp; W3layouts</a></p>
		<div class="social">
			<ul>
				<li><a href="#"><i class="fb"></i></a></li>
				<li><a href="#"><i class="twt"></i></a></li>
				<li><a href="#"><i class="in"></i></a></li>
					<div class="clearfix"> </div>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- footer-bottom -->
</body>
</html>