<?php 
include("../config.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wowphotos a Ecommerce Category Flat Bootstarp Responsive Website Template | Register :: w3layouts</title>
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
				<li><a href="signin.php">Login</a></li>
				<li><label>|</label></li>
				<li><div class="cart1">
									<a href="#" class="cart-in"> </a>
								</div>
					<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="images/4.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="images/11.jpg" class="img-responsive" alt=""></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">$250.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="checkout.php">Check out</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
							</li> 
				<li>:<span>1</span></li>
				<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
							<li><a href="index.php">Plans  and  prices</a></li>
							<li><a href="products.php"> Take the tour</a></li>
							<li class="active"><a href="register.php">Become a contributor</a></li>
								<div class="clearfix"> </div>
						</ul>
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
<div class="header-bottom">
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""></a>
		</div>
		<div class="search2">
					  <form>
						 <li><input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"></li>
						 <li><div class="section_room1">
							<select id="country" onchange="change_country(this.value)" class="frm-field required">
								<option value="null">English</option>
								<option value="null">French</option>         
								<option value="AX">Arab</option>
							</select>
						</div></li>
						<li> <input type="submit" value="search"></li>
						<div class="clearfix"> </div>
					  </form>
					</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- header -->
<!-- registration -->
	<div class="main-1">
	<h1>Easiest way to buy images</h1>
		<div class="container">
			<div class="register">
            <div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign" style="margin-top:16px;">
 <form action="customersave.php" method="post">
<form action="usersave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
   <div class="form-group">
   <label for="name">Full Name :</label>
    <input type="text" class="form-control" name="txt_uname"  class="form-control" required>
  </div>
    <div class="form-group">
   <label for="name">Gender:</label>
    <label>
       <input type="radio" name="gender" value="male" id="Radio_0" checked>
       Male</label>
     <label>
       <input type="radio" name="gender" value="female" id="Radio_1">
       Female</label>
     <br>
    </div>

 <div class="form-group">
 <label for="name">Date Of Birth:</label>
   <input type="date" name="txt_date"  class="form-control">
 </div>
  <div class="form-group">
    <label for="pwd">Address :</label>
 <textarea  class="form-control" name="txt_address"  class="form-control"></textarea>
  </div>
    <div class="form-group">
    <label for="name">Email:</label>
       <input type="email" name="txt_uemail"  class="form-control">
     </div>
 <div class="form-group">
    <label for="name">User Type:</label>
    <select name="utype" required  class="form-control">
    <option value="0">----Select----</option>
          <?php
               $result=mysqli_query($con,"select *from tbl_usertype");
                  while($row=mysqli_fetch_array($result))
                    {
           ?>
                       <option value="<?php echo $row['ut_id']?>">
						<?php echo $row['ut_name'];?>
						</option>
<?php
}
?></select></div>
 <div class="form-group">
   <label for="name">Phone number:</label> 
   <input type="tel" name="txt_tel"  class="form-control">
 </div>
  <div class="form-group">
<label> Achievements</label>
<textarea name="txt_uach" class="form-control"></textarea>
</div>
 <div class="form-group">
<label> Username</label>
<input type="text" name="txt_uname" class="form-control">
</div>
 <div class="form-group">
<label> Password</label>
<input type="text" name="txt_pwd" class="form-control">
</div>
 <button type="submit" class="btn btn-primary" name="btn_usersave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button>
		    </div>
		 </div>
	</div>
    </div>
</form>
</div>
</td>
<td width="25%"></td>
</table>
</div>
<!-- registration -->


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