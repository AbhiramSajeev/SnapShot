<?php
session_start();
include("../config.php");
$cust_id=$_SESSION["u_id"];
$result=mysqli_query($con,"select max(b_id) as bid from tbl_booking where c_id=$cust_id");
$row=mysqli_fetch_array($result);
$bid=$row['bid'];
$result1=mysqli_query($con,"select Total as tot,p_id as pid,quantity as Qty from tbl_booking where b_id=$bid");
$row1=mysqli_fetch_array($result1);
$total=$row1['tot'];
$pid=$row1['pid'];
$Qty=$row1['Qty'];
$result2=mysqli_query($con,"select * from tbl_painting where p_id=$pid");
$row2=mysqli_fetch_array($result2);
$count=$row2['count'];
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
							
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
						</li>
					</ul>
					<!---->
					
					<!---->
				</div>
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
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>

					</ul>

				</div>
			</nav>
		</header>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Payment </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--// header_top -->
		<!--Payment-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Payment </h3>
                    <h5>Amount:₹<?php echo $total; ?></h5>
                    
					<!--/tabs-->
					<div class="responsive_tabs">
						<div id="horizontalTab">
							<ul class="resp-tabs-list">
								
								<li>Credit/Debit</li>
								<li>Net Banking</li>
								<li>Paypal Account</li>
							</ul>
							<div class="resp-tabs-container">
								<!--/tab_one-->
								
								<!--//tab_one-->
								<div class="tab2">
									<div class="pay_info">
										<form action="" method="post" class="creditly-card-form agileinfo_form">
											<section class="creditly-wrapper wthree, w3_agileits_wrapper">
												<div class="credit-card-wrapper">
													<div class="first-row form-group">
														<div class="controls">
                                                        <input type="hidden" name="count" value="<?php echo $count; ?>">
                                                           <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                                                        <input type="hidden" name="Qty" value="<?php echo $Qty; ?>">
                                                        <input type="hidden" name="amount" value="<?php echo $total; ?>">
															<label class="control-label">Name on Card</label>
															<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
														</div>
														<div class="w3_agileits_card_number_grids">
															<div class="w3_agileits_card_number_grid_left">
																<div class="controls">
																	<label class="control-label">Card Number</label>
																	<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required>
																</div>
															</div>
															<div class="w3_agileits_card_number_grid_right">
																<div class="controls">
																	<label class="control-label">CVV</label>
																	<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
																</div>
															</div>
															<div class="clear"> </div>
														</div>
														<div class="controls">
															<label class="control-label">Expiration Date</label>
															<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
														</div>
													</div>
                                                    <input type="submit" name="save" value="Make a payment ">
													
											</section>
										</form>

									</div>
								</div>
								<div class="tab3">

									<div class="pay_info">
										<div class="vertical_post">
											<form action="" method="post">
												<h5>Select From Popular Banks</h5>
												<div class="swit-radio">
													<div class="check_box_one">
														<div class="radio_one">
															<label>
                                                            <input type="hidden" name="amount" value="<?php echo $total; ?>">
																<input type="radio" name="radio" checked="">
																<i></i>Syndicate Bank</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>Bank of Baroda</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>Canara Bank</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>ICICI Bank</label>
														</div>
													</div>
													<div class="check_box_one">
														<div class="radio_one">
															<label>
																<input type="radio" name="radio">
																<i></i>State Bank Of India</label>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
												<h5>Or SELECT OTHER BANK</h5>
												<div class="section_room_pay">
													<select class="year">
														<option value="">=== Other Banks ===</option>
														<option value="ALB-NA">Allahabad Bank NetBanking</option>
														<option value="ADB-NA">Andhra Bank</option>
														<option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
														<option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
														<option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
														<option value="BOI-NA">Bank of India NetBanking</option>
														<option value="BOM-NA">Bank of Maharashtra NetBanking</option>
														<option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
														<option value="CBI-NA">Central Bank of India</option>
														<option value="CUB-NA">City Union Bank NetBanking</option>
														<option value="CRP-NA">Corporation Bank</option>
														<option value="DBK-NA">Deutsche Bank NetBanking</option>
														<option value="DCB-NA">Development Credit Bank</option>
														<option value="DC2-NA">Development Credit Bank - Corporate</option>
														<option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
														<option value="FBK-NA">Federal Bank NetBanking</option>
														<option value="IDS-NA">Indusind Bank NetBanking</option>
														<option value="IOB-NA">Indian Overseas Bank</option>
														<option value="ING-NA">ING Vysya Bank (now Kotak)</option>
														<option value="JKB-NA">Jammu and Kashmir NetBanking</option>
														<option value="JSB-NA">Janata Sahakari Bank Limited</option>
														<option value="KBL-NA">Karnataka Bank NetBanking</option>
														<option value="KVB-NA">Karur Vysya Bank NetBanking</option>
														<option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
														<option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
														<option value="CPN-NA">PNB Corporate NetBanking</option>
														<option value="PNB-NA">PNB NetBanking</option>
														<option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option>
														<option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
														<option value="SWB-NA">Saraswat Bank NetBanking</option>
														<option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
														<option value="SBH-NA">SB Hyderabad NetBanking</option>
														<option value="SBM-NA">SB Mysore NetBanking</option>
														<option value="SBT-NA">SB Travancore NetBanking</option>
														<option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
														<option value="SIB-NA">South Indian Bank NetBanking</option>
														<option value="SBP-NA">State Bank of Patiala NetBanking</option>
														<option value="SYD-NA">Syndicate Bank NetBanking</option>
														<option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option>
														<option value="UCO-NA">UCO Bank NetBanking</option>
														<option value="UBI-NA">Union Bank NetBanking</option>
														<option value="UNI-NA">United Bank of India NetBanking</option>
														<option value="VJB-NA">Vijaya Bank NetBanking</option>
													</select>
												</div>
												<input type="submit" name="save" value="PAY NOW">
											</form>
										</div>
									</div>
								</div>
								<div class="tab4">
									<div class="pay_info row">
										<div class="col-md-6 tab-grid">
											<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
											<p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
											<a class="btn btn-primary">Checkout via Paypal</a>
										</div>
										<div class="col-md-6">
										<form action="" method="post" class="cc-form">
												<div class="clearfix">
													<div class="form-group form-group-cc-number">
                                                    <input type="hidden" name="amount" value="<?php echo $total; ?>">
														<label>Card Number</label>
														<input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text">
														<span class="cc-card-icon"></span>
													</div>
													<div class="form-group form-group-cc-cvc">
														<label>CVV</label>
														<input class="form-control" placeholder="xxxx" type="text">
													</div>
												</div>
												<div class="clearfix">
													<div class="form-group form-group-cc-name">
														<label>Card Holder Name</label>
														<input class="form-control" type="text">
													</div>
													<div class="form-group form-group-cc-date">
														<label>Valid Thru</label>
														<input class="form-control" placeholder="mm/yy" type="text">
													</div>
												</div>
												<div class="checkbox checkbox-small mt-4">
													<label>
														<input class="i-check" type="checkbox" checked="">Add to My Cards</label>
												</div>
												<input class="btn btn-primary submit mt-4" type="submit" name="save" value="Proceed Payment">
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--//tabs-->
				</div>

			</div>
			<!-- //payment -->
		</section>
		<!--//Payment-->
		<!--footer -->
		<footer class="py-lg-5 py-3">
			<div class="container-fluid px-lg-5 px-3">
				<div class="row footer-top-w3layouts">
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>About Us</h3>
						</div>
						<div class="footer-text">
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
								tellus. Nulla porttitor accumsana tincidunt.</p>
							<ul class="footer-social text-left mt-lg-4 mt-3">

								<li class="mx-2">
									<a href="#">
										<span class="fab fa-facebook-f"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-twitter"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-google-plus-g"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-linkedin-in"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fas fa-rss"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-vk"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Get in touch</h3>
						</div>
						<div class="contact-info">
							<h4>Location :</h4>
							<p>0926k 4th block building, king Avenue, New York City.</p>
							<div class="phone">
								<h4>Contact :</h4>
								<p>Phone : +121 098 8907 9987</p>
								<p>Email :
									<a href="mailto:info@example.com">info@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Quick Links</h3>
						</div>
						<ul class="links">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="404.html">Error</a>
							</li>
							<li>
								<a href="shop.html">Shop</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Sign up for your offers</h3>
						</div>
						<div class="footer-text">
							<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
							<form action="#" method="post">
								<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
								<button class="btn1">
									<i class="far fa-envelope" aria-hidden="true"></i>
								</button>
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				</div>
				<div class="copyright-w3layouts mt-4">
					<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> W3layouts </a>
					</p>
				</div>
			</div>
		</footer>
		<!-- //footer -->
		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- easy-responsive-tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>

		<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

		<script type="text/javascript">
			$(function () {
				var creditly = Creditly.initialize(
					'.creditly-wrapper .expiration-month-and-year',
					'.creditly-wrapper .credit-card-number',
					'.creditly-wrapper .security-code',
					'.creditly-wrapper .card-type');

				$(".creditly-card-form .submit").click(function (e) {
					e.preventDefault();
					var output = creditly.validate();
					if (output) {
						// Your validated credit card output
						console.log(output);
					}
				});
			});
		</script>
		<!-- //credit-card -->
		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
		<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<!-- //smooth-scrolling-of-move-up -->
		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>
<?php
if(isset($_POST["save"]))
{
$amount=$_POST["amount"];
$count=$_POST["count"];
$pid=$_POST["pid"];
$Qty=$_POST["Qty"];
$billno="hghjkh122";
$pdate=date("Y/m/d");
$tot=$amount+50;
//echo "insert into tbl_payment1(bill_no,c_id,date,amount)value('$billno',$cust_id,'$pdate',$amount)";
mysqli_query($con,"insert into tbl_payment(bill_no,c_id,date,b_id,Amount)value('$billno',$cust_id,'$pdate',$bid,$tot)");
mysqli_query($con,"update tbl_booking set status=2 where b_id=$bid");
$quantity=$count-$Qty;
mysqli_query($con,"update tbl_painting set count=$quantity where p_id=$pid");
header("location:sucess.php");
}
?>