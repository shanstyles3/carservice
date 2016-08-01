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
<!--End  Scroll top -->
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
											<h3><a href="http://www.edmunds.com/car-care/top-five-ways-to-make-your-car-run-forever.html">Top Five Ways to Make Your Car Run Forever</a></h3>
											<p>Though we may set out to keep a car forever, not everyone will have the persistence — and luck — of Irv Gordon, a man who holds the world record for having driven his 1966 Volvo P1800 for nearly 3 million miles. You can, <span>however, greatly extend the life of your vehicle, while simultaneously reducing the possibility of mechanical mishaps. The following five items are basic and can apply to any vehicle.

</span> </p>
											<a href="http://www.edmunds.com/car-care/top-five-ways-to-make-your-car-run-forever.html" class="button button-icon button-icon-demo">Read More</a>
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
											<h3><a href="http://auto.howstuffworks.com/10-ways-to-proactively-protect-your-engine.htm">10 Ways to Proactively Protect Your Engine</a></h3>
											<p>The majority of the time most of us don't spend a lot of time thinking about our engines. We hop into the car, turn the key and head out to wherever we're going. When we do notice the engine, however, it's usually when we hear it making sounds we're not accustomed to hearing or when the car feels a little different than it did before.

Engines need to be looked after.<span> They need a check-up every now and then, and they also require some regular maintenance to keep them in good running condition. To help you take proper care of your engine and to keep it from creating serious problems, we've put together this list of 10 ways to proactively protect your engine.

Stay on top of these suggestions and your engine will run better, last longer and keep you from shelling out more cash later on down the road.

                        </span> </p>
											<a href="http://auto.howstuffworks.com/10-ways-to-proactively-protect-your-engine.htm" class="button button-icon button-icon-demo">Read More</a>
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
											<h3><a href="http://www.autotrader.com/car-news/10-tips-to-make-your-car-last-longer-33660">10 Tips to Make Your Car Last Longer</a></h3>
											<p><span>Getting from point A to point B by car costs a certain amount of dough, and thanks to recent record-high gas prices it takes more of your hard-earned money than ever before. But while you can't always control ownership costs such as fuel, repairs and insurance rates, one thing you do have power over is making your car last longer and maintaining its value. Here you have a choice: Either spend money on a new car every few years or keep your current car running great and looking sharp. If you decide to go the latter route, follow these 10 tips to help keep your ride rolling.</span> </p>
											<a href="http://www.autotrader.com/car-news/10-tips-to-make-your-car-last-longer-33660" class="button button-icon button-icon-demo">Read More</a>
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
			</div>
	    </div>
  </div>
		 <div class="copy_right">
		 	 <div class="wrap">
				<p>The Carbon Hood© All Rights Reserved | Designed by The Carbon Hood Team</p>
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

