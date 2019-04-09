	<?php 
	session_start();
include("../config.php");
include("header1.php");
?>
    <div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Landscape</h3>
				<div class="row">
					<!-- /photo -->
                    <?php
                    $result=mysqli_query($con,"select * from tbl_photograph where status=1 and sca_id=1 and count>0");
while($row=mysqli_fetch_array($result))
{
	$photo=$row['photo'];
	$amount=$row['amount'];
	$name=$row['ph_name'];
	$photo_id=$row['ph_id'];
?>
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="photoupload/<?php echo $photo; ?>" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single1.php?pid=<?php echo $photo_id;  ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="single1.php"><?php echo $name; ?></a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money "><?php echo $amount; ?></span>
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
										<div class="googles single-item hvr-outline-out">
											<form action="#" method="post">
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="googles_item" value="Farenheit">
												<input type="hidden" name="amount" value="575.00">
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus"></i>
												</button>

												
											</form>

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
				<!-- //photo -->
				</div>
                <?php
				include("footer.php");
				?>