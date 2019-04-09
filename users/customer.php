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
				</ul>
			</div>
			<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
							<li><a href="index.php">Plans  and  prices</a></li>
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
<a href="index.php">
							Snap<span style="color:#F1080C">SHOT</span> </a>
					</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- header -->
<!-- registration -->
	<div class="main-1" style="background-image:url(images/39.jpg)">
	<h1>Easiest way to buy images</h1>
		<div class="container">
			<div class="register">
            <div class="parallax" style="min-height:700px;">
<table width="100%">
<td width="25%"></td>
<td width="50">
<div class="formDesign w3ls-form" style="margin-top:16px;">
		  	  <form action="customersave.php" method="post">
<h3 style="align-content:center;text-align:center;text-height:max-size;color:#AA19E9">ENTER YOUR DETAILS</h3>
 <div class="form-group">
  <label for="name">Full Name :</label>
   <input type="text" class="form-control" name="txt_name" required>
   </div>
    <div class="form-group" >
    <label for="name">Gender:</label>
    <label><input type="radio" name="gender" value="male" id="Radio_0" required>MALE</label>
     <label><input type="radio" name="gender" value="female" id="Radio_1" required>FEMALE</label>
     <br>
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
<label>Date Of Birth:</label>
  <input type="date" name="txt_date" class="form-control" required>
</div>
 <div class="form-group">
    <label>Address :</label>
 <textarea class="form-control" name="txt_address"  class="form-control"></textarea>
  </div>
   <div class="form-group">      
      <label for="name">Email:</label>
     <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="txt_uemail" class="form-control" required>
   </div>
    <div class="form-group">
  <label for="name">Phone number:</label>   
  <input type="tel" pattern="[0-9]{10}" maxlength="10" name="txt_tel" class="form-control" required>
  </div>
 <div class="form-group">
<label> Username</label>
<input type="text" name="txt_cname" class="form-control">
</div>
 <div class="form-group">
<label> Password</label>
<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  name="txt_cpwd" class="form-control" required>
</div>
 <button type="submit" class="btn btn-primary" name="btn_cusave" style="float: right">save</button>
<button type="reset" class="btn btn-warning" style="float: right;margin-right:10px ">Clear</button></div>
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
		<p>Copyrights © 2015 Wowphotos All rights reserved | <a href="adminlogin.php">&nbsp;Admin Login</a></p>
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