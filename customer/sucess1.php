<?php 
session_start();
include("../config.php");
$cust_id=$_SESSION["u_id"];
/*
$result=mysqli_query($con,"select max(b_id) as bid from tbl_booking2 where c_id=$cust_id");
$row=mysqli_fetch_array($result);
$bid=$row['bid'];
$result1=mysqli_query($con,"select * from tbl_booking2 b,tbl_photograph p where b.b_id=$bid and p.ph_id=b.ph_id");
$row1=mysqli_fetch_array($result1);
$photo=$row1['photo'];
$qua=$row1['quantity'];
$amt=$row1['amount'];
$total=$row1['Total'];
 
 
<!-- $payid = $_GET['payid'];
 
 $bill = mysqli_query($con,"SELECT p.amount as pamount, b.amount as bamount, pm.amount as pmamount FROM tbl_booking b, tbl_payment pm,tbl_painting p where b.p_id=p.p_id AND pm.pmt_id='$payid'");
 echo $con->error;
 
var_dump(mysqli_fetch_array($bill)); */
 
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Payment :: w3layouts</title>
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">12345678099</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							Snap<span style="color:#F1080C">SHOT</span> </a>
			
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
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
					
					<!---->
				</div>
			</div>
	</div>
		</header>
        <br>
 <div class="container">
			<div class="check-out" style="color:#000000">
				<h4 class="title">Thank You</h4>
				<p class="cart">Your Payment is Sucessful.<br>Click<a href="index.php"> here</a> to continue shopping</p>
			</div>
            </div>