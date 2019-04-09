<!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>SnapShot</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"> <i class="fa fa-home"></i><span>Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Registrations</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="category.php"> Category</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="subcategory.php"> SubCategory</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="usertype.php">User Type</a></li>        		
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Request</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="photoconform.php">photos</a></li>
												<li id="menu-academico-boletim" ><a href="paintingconform.php">paintings</a></li>
											  </ul>
										 </li>
                                         <li id="menu-academico" ><a href="customerreport.php"><span>Customer Details</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                         <li id="menu-academico" ><a href="#"><i class="fa fa-tachometer"></i> <span>Report</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
                                             <li id="menu-academico" ><a href="#"><span>Photograph</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                             <ul>
												<li id="menu-academico-avaliacoes" ><a href="photoreportaccept.php">Accepted</a></li>
												<li id="menu-academico-boletim" ><a href="photoreportreject.php">Rejected</a></li>
                                                </ul>
                                                <li id="menu-academico" ><a href="#"><span>Painting</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                                <ul>
												<li id="menu-academico-avaliacoes" ><a href="paintingreportaccept.php">Accepted</a></li>
												<li id="menu-academico-boletim" ><a href="paintingreptreject.php">Rejected</a></li>
                                                </ul>
                                                 <li id="menu-academico" ><a href="#"><span>Booking</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                                 <ul>
                                                  <li id="menu-academico-boletim" ><a href="bookingreport.php">Painting</a></li>
                                                  <li id="menu-academico-boletim" ><a href="bookingreport2.php">Photograph</a></li>
                                
                                                  </ul>
                                                 
											  </ul>
										 </li>
                                          <li id="menu-academico" ><a href="logout.php"><span>Logout</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
                                          <!--<li id="menu-academico-avaliacoes" ><a href="feedbackview.php">Feedback</a></li>-->
										  </ul>
									 </li>
									 
							       
									
									  </ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>