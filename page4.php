<?php
	session_start();
	require_once('connect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Carbon Hood</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Scroll top -->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--End Scroll top -->
</head>
<body>
  <div class="header">  	
		 <div class="header_top">
		 	 <div class="wrap">
		 			<div class="logo">
		 				<a href="index.php"><img src="images/logo.jpg" width="170px" height="150px" alt="" /></a>
					</div>
					<div class="dail">
					<?php 
						//include_once "connect.php";
						if(!isset($_SESSION['email']) || $_SESSION['email'] == '') { ?>
			
						<a href="signin.php">Sign In</a>
						<a href="signup.php">Sign Up</a>

						<?php } else { ?>
						<a href="logout.php">Logout</a>
					
						<?php } ?>
					</div>
					<div class="clear"></div>
					</div>	
		     </div>				
       <div class="header-bottom">
	    	<div class="wrap">
		     <div class="menu">
					    <ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li class="active"><a href="blog.php">Blog</a></li>
							<li><a href="findacenter.php">Find your service center</a></li>
							<div class="clear"></div>
						</ul>
					</div>
		        <!--<div class="social-icons">						
		                <ul>
		                    <li><a class="facebook" href="#" target="_blank"> </a></li>
		                    <li><a class="twitter" href="#" target="_blank"></a></li>
		                    <li><a class="googleplus" href="#" target="_blank"></a></li>
		                    <li><a class="pinterest" href="#" target="_blank"></a></li>
		                    <li><a class="dribbble" href="#" target="_blank"></a></li>
		                    <li><a class="vimeo" href="#" target="_blank"></a></li>
		                    <div class="clear"></div>
		                </ul>
		 		    </div>-->
		 		    <div class="clear"></div>
		 		     </div>
               </div>
		  </div>
		
   <div class="wrap">
   	 <div class="main">
	    <div class="content">
	    	<h2>blog</h2>
	    					<div class="blog-leftgrids">
								<div class="image group">
									<div class="grid images_3_of_1">
										<a href="#"><img src="images/blog-img.jpg" alt="" /></a>
									</div>
										<div class="grid blog-desc">
											<h3><a href="http://www.samarins.com/maintenance/bodymain.html">Car exterior care tips</a></h3>
											<p>Wash your car regularly. Bird droppings, dead bugs, or limestone dripping from the basement parking will cause damage to the paint if not washed off in time. 
In winter time, the road salt can damage the alloy wheels finish and cause rust spots on the body panels if left for a long period of time. In addition, a last stage in most car washes includes spraying your car with some sort of a protectant, such as wax that will help preserve paint finish from rust.
<span></span> </p>
											<a href="http://www.samarins.com/maintenance/bodymain.html" class="button button-icon button-icon-demo">Read More</a>
									   </div>
		  						 </div>
		  						 <!--<div class="artical-links">
		  						 	<ul>
		  						 		<li><a href="#"><img src="images/blog-icon1.png" title="date"><span>june 14, 2013</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon5.png" title="permalink"><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>-->
							</div>
							<div class="blog-leftgrids">
								<div class="image group">
									<div class="grid images_3_of_1">
										<a href="#"><img src="images/blog-img2.jpg" alt="" /></a>
									</div>
										<div class="grid blog-desc">
											<h3><a href="http://www.autopia-carcare.com/how-to-care-for-your-new-car-detailing-101.html">HOW TO PROPERLY CARE FOR YOUR NEW CAR - DETAILING 101

</a></h3>
											<p>Buying a new car can be intense; there are so many choices and you want to make sure you get the best deal possible. Then there is all of that paperwork before you can get the keys and drive it home. Then what?



Many people think, it's new, so I don’t need to do anything yet… Right? WRONG! You just paid a lot of money for that car and if you want to keep it looking new, just like anything else, you have to take care of it! A new car is not immune to the harsh environmental elements and the clearcoat is not the shield that protects your car, it’s just clear paint and it needs to be protected.

<span> 
</span> </p>
											<a href="http://www.autopia-carcare.com/how-to-care-for-your-new-car-detailing-101.html" class="button button-icon button-icon-demo">Read More</a>
									   </div>
		  						 </div>
		  						 <!--<div class="artical-links">
		  						 	<ul>
		  						 		<li><a href="#"><img src="images/blog-icon1.png" title="date"><span>june 14, 2013</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon5.png" title="permalink"><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>-->
							</div>
							<div class="blog-leftgrids">
								<div class="image group">
									<div class="grid images_3_of_1">
										<a href="#"><img src="images/blog-img3.jpg" alt="" /></a>
									</div>
										<div class="grid blog-desc">
											<h3><a href="http://www.halfordsautocentres.com/advice/air-conditioning-advice/car-air-conditioning-tips">Car Air Conditioning Tips</a></h3>
											<p><span>If you want to avoid sticking to your leather seats in a long hot traffic jam this summer, and demist your windows at the flick of a switch in winter, you'll need to understand how to effectively maintain your car's air conditioning system.

How does car air conditioning work?
Car air conditioning works like your fridge at home, cooling the air with a refrigerant gas and then circulating it through your car.

How to get the most from your air con</span> </p>
											<a href="http://www.halfordsautocentres.com/advice/air-conditioning-advice/car-air-conditioning-tips" class="button button-icon button-icon-demo">Read More</a>
									   </div>
		  						 </div>
		  						 <!--<div class="artical-links">
		  						 	<ul>
		  						 		<li><a href="#"><img src="images/blog-icon1.png" title="date"><span>june 14, 2013</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon5.png" title="permalink"><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>-->
							</div>
							<div class="content-pagenation">
						<li><a href="blog.php">First</a></li>
						<li><a href="page1.php">1</a></li>
						<li><a href="page2.php">2</a></li>
						<li><a href="page3.php">3</a></li>
						<li><a href="page4.php">4</a></li>
						<li><span>....</span></li>
						<li><a href="lastpage.php">Last</a></li>
						<div class="clear"> </div>
					</div>	    	 			 	   
		    </div>
		</div> 
		</div>  
   <div class="footer">
   	 <div class="wrap">
   	 <div class="footer_grides">
	     <div class="section group">
				<!--<div class="col_1_of_4 span_1_of_4">
					<h3>Latest Tweets</h3>
						<div class="post">
				    		<p><span><a href="#">Tuesday,June 31th,2013</a></span></p>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Ut enim ad minim veniam sed do <span><a href="#">[...]</a></span></p>
				       </div>
				       <div class="post">
				    		<p><span><a href="#">Monday,May 21th,2013</a></span></p>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Ut enim ad minim veniam sed do<span><a href="#">[...]</a></span></p>
				       </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Connect With Us</h3>
					<div class="social_icons">
                	<ul>
                    	<li><a href="#" class="facebook">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong> <br>+ 12, 297</span>
                        </a></li>
                        <li><a href="#" class="twitter">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong> <br>+ 5, 287</span>
                        </a></li>
                         <li><a href="#" class="rss">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Rss</strong> <br>+ 77, 287</span>
                        </a></li>
                    </ul>
                </div>
				</div>-->
				<div class="col_1_of_4 span_1_of_4">
					<h3>Navigate</h3>
					          <ul>
						            <li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="findacenter.php">Find your service center</a></li>
						   	   </ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Location</h3>
					      <ul>
						  	   <li>Mira Road</li>
						  	  <li>Mumbai</li>
						  	   <li>India</li>
						  	 <li><span>E-mail :</span> carbonhood04@gmail.com</li>
						  	 <li><span>Telephone :</span>+022 23456789</li>
						  	 
						  </ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4 style="color: #A8A8A8;">Call Us Now</h4>
						<ul>
							<li><p><img src="images/mobile.png">+91 9664286842</p></li>
							<li><p><img src="images/chat.png">Live Chat (Whatsapp)</p></li>
						</ul>
				</div>
			</div>
	    </div>
  </div>
		 <div class="copy_right">
		 	 <div class="wrap">
				<p>The Carbon Hood © All Rights Reserved | Designed by The Carbon Hood Team </p>
			 </div>
		</div>	
		<!-- scroll Top -->
	 <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
	<!-- End scroll Top -->
  </div>  
</body>
</html>

