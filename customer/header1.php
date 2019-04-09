<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info-cart text-left mt-lg-4">
					<div class="dropdown">
                      <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        <i class="fa fa-user"></i> Profile
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="customerview.php">My Profile </a>
                        <a class="dropdown-item" href="changepwd.php">Change Password </a>
                        <a class="dropdown-item" href="bookingreport.php">Booking Details</a>
                        <?php if($_SESSION["u_type"]=="2" || $_SESSION["u_type"]=="3" )
						{ ?>
                        <a class="dropdown-item" href="uploadview.php">Uploading Details</a>
                        <?php
						}
						 else
						{ ?>
                        <a class="dropdown-item" href="uploadview.php" hidden="true">Uploading Details</a>
                     <?php 
						}?>
                        <?php if($_SESSION["u_type"]=="2" || $_SESSION["u_type"]=="3" )
						{ ?>
                        <a class="dropdown-item" href="rejectview.php">Rejected Product</a>
                        <?php
						}
						 else
						{ ?>
                         <a class="dropdown-item" href="rejectview.php" hidden="true">Rejected Product</a>
                         <?php
						}?>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                       
                      </div>
                    </div>
				</div>
                                                    
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							Snap<span style="color:#F1080C">SHOT</span> </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<!--<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>-->
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					
				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="photographs.php">Photographs</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="paintings.php">Paintings</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="drawing.php">Drawings</a>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Category
							</a>
							<ul class="dropdown-menu mega-menu ">
								<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Photographs </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="landscape.php">Lanscape</a>
												</li>
												<li class="">
													<a href="wildlife.php">Wildlife</a>
												</li>
												<li>
													<a href="nature.php">Nature</a>
												</li>
                                                <li>
													<a href="pet.php">Pet</a>
												</li>
                                                <li>
													<a href="animals.php">Animals</a>
												</li>
                                                <li>
													<a href="action.php">Action</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.php">About</a>
												</li>
												<li>
													<a href="#">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Paintings </h5>
											<div class="media-mini mt-3">
                                            <li class="">
												<a href="oilpainting.php">Oil painting </a>
													</li>
                                               <li class=""><a href="digitalpainting.php">Digital Painting </a>
													</li>
                                               <li class=""><a href="lwash.php">Link wash Painting </a>
													</li> 
                                                    <li class=""><a href="hwaxpainting.php">Hot wax Painting </a>
													</li>
                                                    <li class=""><a href="spraypainting.php">Spray Painting </a>
													</li> 
                                              <li class="mt-3"><h5>Drawings</h5></li> 
												 <li class=""><a href="drawing.php">Drawings </a>
													</li>
                                                  <li class=""><a href="pencildrawing.php">pencil Drawing </a>
													</li>
                                                     <li class=""><a href="emodrawing.php">Emotive Drawing </a>
													</li>
                                                    <li class=""><a href="stillife.php">Stil Life </a>
													</li>   	   
												
											</div>
										</div>
										<!--<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													
												</a>
											</div>

										</div>-->
									</div>
                                        </ul>
                                        </li>                                        
                        <li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
                        <?php if($_SESSION["u_type"]=="2"): ?>
						<li class="nav-item">
							<a class="btn btn-primary" href="photograph.php"><i class="fa fa-upload"> &nbsp;</i><b>UPLOAD</b></a>
						</li>
                        <?php endif; ?>
                        <?php if($_SESSION["u_type"]=="3"): ?>
                        <li class="nav-item">
							<a class="btn btn-primary" href="painting.php"><i class="fa fa-upload"> &nbsp;</i><b>UPLOAD</b></a>
						</li>
                        <?php endif; ?>
                                        </ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
        