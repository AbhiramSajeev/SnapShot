<?php
session_start();
include("../config.php");
include("header1.php");
?>
		
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Photographs
								<span>Cool summer sale 50% off</span>
							</h3>
							<!--<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>-->
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Paintings
								<span>Want to Look Your Best?</span>
							</h3>
							<!--<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>-->

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3>Drawings
								<span>Cool summer sale 50% off</span>
							</h3>
							<!--<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>-->

						</div>
					</div>
					<div class="carousel-item item4">
						<div class="carousel-caption text-center">
							<h3>Explore The World
								<span>Want to Look Your Best?</span>
							</h3>
							<!--<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>-->
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
				<div class="row">
					<!-- /womens -->
                    <?php
                    $result=mysqli_query($con,"select * from tbl_painting where status=1 and count>0");
while($row=mysqli_fetch_array($result))
{
	$name=$row['pa_name'];
	$painting=$row['painting'];
	$amunt=$row['amount'];
?>
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="paintingupload/<?php echo $painting;  ?>" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?pid=<?php echo $row['p_id']; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="single.php"><?php echo $name; ?></a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money "><?php echo $amunt; ?></span>
												</div>
											</div>
											<ul class="stars">
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star-half-o" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					
					
					<?php
}
?>
				</div>
				<!-- //womens -->
				</div>
				<!--//row-->
				

<?php
include("footer.php");?>