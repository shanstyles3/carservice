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
<!--Scroll top-->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--End Scroll top-->
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
											<h3><a href="http://www.wikihow.com/Maintain-a-Car">How to Maintain a Car</a></h3>
											<p>With so much emphasis on car buying, few people consider the maintenance requirements of an automobile. The modern car may have as many as 75,000 parts, and the malfunction of just one can make your car behave very strangely.<span> Maintaining a car in good condition will help you to keep it safe, drive it for a long time, and someday sell it for a good price</span> </p>
											<a href="http://www.wikihow.com/Maintain-a-Car" class="button button-icon button-icon-demo">Read More</a>
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
		  						 </div>
							</div>-->
							<div class="blog-leftgrids">
								<div class="image group">
									<div class="grid images_3_of_1">
										<a href="#"><img src="images/blog-img2.jpg" alt="" /></a>
									</div>
										<div class="grid blog-desc">
											<h3><a href="http://www.popularmechanics.com/cars/how-to/a7980/how-to-care-for-an-aging-car-10951072/">How to Care for an Aging Car</a></h3>
											<p>As the U.S. economy continues to battle tough headwinds, many drivers are keeping their cars longer. The average age of a passenger vehicle in the U.S. has increased to about 11 years, according to researchers R.L. Polk. (It was only nine years back in 2000.)

I'm in that aging-car crowd. I own two 12-year-old vehicles, one with 168,000 miles on its odometer, the other with just under 100,000. My 9-year-old car has suffered through 170,000 miles and two teenagers. My "new" car is a 2007 with 72,000 miles on it. <span>My son drives an 18-year-old vehicle with more than 200,000 on its intermittently operating odometer.

Here are some of the things I do to help keep these vehicles alive:</span> </p>
											<a href="http://www.popularmechanics.com/cars/how-to/a7980/how-to-care-for-an-aging-car-10951072/" class="button button-icon button-icon-demo">Read More</a>
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
											<h3><a href="http://www.samarins.com/maintenance/extend-life-of-your-car.html">How to Extend the Life of Your Car and Avoid Problems </a></h3>
											<p><span>Some car owners drive their cars for many hundred thousand miles without major issues, while others pay thousands in repair bills. What is the secret? Here are 10 proven tips: </span> </p>
											<a href="http://www.samarins.com/maintenance/extend-life-of-your-car.html" class="button button-icon button-icon-demo">Read More</a>
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
		  						 </div>
							</div>-->
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
				</div>-->
				<!--<div class="col_1_of_4 span_1_of_4">
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
				<p>The Carbon Hood © All Rights Reserved | Designed by The Carbon Hood Team</p>
			 </div>
		</div>	
		<!--scroll Top -->
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

