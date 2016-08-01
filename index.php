<?php
	session_start();
	require_once('connect.php');
?>
<!--<?php
//include_once "header.php";
?>-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Carbon Hood</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<!-- Scroll top -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!---End  Scroll top -->
 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
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
		 </div>			
		 <!-- Slider -->				
		    <div class="slider">
		        <div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
		                <img src="images/1.jpg" height="500px" data-thumb="images/1.jpg" alt="" />
		                <img src="images/2.jpg" height="500px" data-thumb="images/2.jpg" alt="" />
		                <img src="images/3.jpg" height="500px" data-thumb="images/3.jpg" alt="" />
		                <img src="images/4.jpg" height="500px" data-thumb="images/4.jpg" alt="" />
		            </div>
		        </div>
		   	</div>
		  <!-- End Slider -->
		  <!--Menu List-->
		   <div class="header-bottom">
	    	<div class="wrap">
		     <div class="menu">
					    <ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="findacenter.php">Find your service center</a></li>
							<div class="clear"></div>
						</ul>
					</div>
		        <!-- <div class="social-icons">						
		                <ul>
		                    <li><a class="facebook" href="#" target="_blank"> </a></li>
		                    <li><a class="twitter" href="#" target="_blank"></a></li>
		                    <li><a class="googleplus" href="#" target="_blank"></a></li>
		                    <li><a class="pinterest" href="#" target="_blank"></a></li>
		                    <li><a class="dribbble" href="#" target="_blank"></a></li>
		                    <li><a class="vimeo" href="#" target="_blank"></a></li>
		                    <div class="clear"></div>
		                </ul>
		 		    </div>
		 		 -->  
		 		    <div class="clear"></div>
		 		    </div>
               </div>
		  </div>
		<!--End Menu List-->
   <div class="wrap">
   	 <div class="main">
	    <div class="content">
	    	<div class="content_top">
	    	  <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<div class="num-heading">
				       <div class="number">
							<figure><span>1</span></figure>
					    </div>
					       		<div class="heading">								
									<h4>Car Repair</h4>
							     </div>
							 <div class="clear"></div>
						</div> 
						    <div class="heading-desc">	
							     	<p>And what's best about our car service center search is we offer free collection and delivery on every vehicle that's repaired. We collect it from your home or work, give it the repairs it needs and then deliver it back to you in its incredible new condition. So you can sit back, relax, and wait for your car to come back to you as good as new.
</p>
					       		        <!--<a href="#" class="button button-icon button-icon-demo">Read More</a>-->
					       		</div>	
				 </div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="num-heading">
				       <div class="number">
							<figure><span>2</span></figure>
					    </div>
					       		<div class="heading">								
									<h4>Wheel Alignment</h4>
							     </div>
							 <div class="clear"></div>
						</div> 
						    <div class="heading-desc">	
							     	<p>After a quick discussion with you about how your vehicle is driving, they will conduct wheel angle measurements using precise equipment. These wheel angle measurements will show whether your wheels are within the alignment settings specified by your vehicle manufacturer’s recommendations. If they don’t match the recommendations, not to worry — we cwill a service center that can adjust them so that they are.</p>					       		
					       		<!--<a href="#" class="button button-icon button-icon-demo">Read More</a>-->
					       		</div>					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="num-heading">
				       <div class="number">
							<figure><span>3</span></figure>
					    </div>
					       		<div class="heading">								
									<h4>car wash</h4>
							     </div>
							 <div class="clear"></div>
						</div> 
						    <div class="heading-desc">	
							     	<p>We guarantee a safe, scratch free wash for your car and have a dedicated customer service team for any issues that you may have. Our highly efficient automated car wash provides you with a complete program of services.All our car wash machines are fitted with state of the art brush technology, used by leading luxury car brands worldwide. Many of our sites also now feature 'touchless' wash options.</p>
					       		<!--<a href="#" class="button button-icon button-icon-demo">Read More</a>-->
					       		</div>					
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="num-heading">
				       <div class="number">
							<figure><span>4</span></figure>
					    </div>
					       		<div class="heading">								
									<h4>Auto Towing</h4>
							     </div>
							 <div class="clear"></div>
						</div> 
						    <div class="heading-desc">	
							     	<p>You'll be hard-pressed to find the same level of expertise that our auto mechanic specialists provide! We have years of experience working on both domestic and import vehicles of all makes and models and can work with you to find cost-effective repair and maintenance alternatives. </p>
					       		<!--<a href="#" class="button button-icon button-icon-demo">Read More</a>-->
					       		</div>
				    </div>
			   </div>
	    	</div>	
	    	   <div class="content-bottom">
		    	   	<div class="section group">
		    	   		<div class="col_1_of_3 span_1_of_3">
						<h3>Welcome</h3>
						<img src="images/welcome.jpg" alt=""/>
						<p style="padding-top:5px;">If you like courteous service, a friendly atmosphere and dealing with people who really care about you and your car, then here is the place for you! Our philosophy is to treat your vehicle as though it was our own. We want it fixed right the first time, on time, and at a fair price. We deliver on that philosophy. Stop in today and see why we make servicing your vehicle a pleasant experience. You’ll notice the difference with your very search.

</p>
					</div>
						<!--<div class="col_1_of_3 span_1_of_3">
							<h3>What we do</h3>
							   <ul>
		  						<li>Lorem ipsum dolor sit amet qui officia</li>
		  						<li>Duis aute irure dolor in culpa qui</li>
		  						<li>Sunt in culpa qui officia vel illum qui</li>
		  						<li>vel illum qui dolorem eum wise man therefore</li>
		  						<li>The wise man therefore in culpa qui officia</li>
		  						<li>Sunt in culpa qui officia culpa qui officia</li>
		  						<li>Lorem ipsum dolor sit amet qui officia</li>
		  						<li>Duis aute irure dolor in culpa qui</li>
		  						<li>Sunt in culpa qui officia vel illum qui</li>
		  						<li>vel illum qui dolorem eum wise man therefore</li>
		  						<li>The wise man therefore in culpa qui officia</li>
		  						<li>Sunt in culpa qui officia culpa qui officia</li>
		  			        </ul>
						</div>-->					
						<!--<div class="col_1_of_3 span_1_of_3">
							<h3>Our Team</h3>
							<div class="post-grid">
								<img src="images/team-1.jpg" alt="" />
								<p><span> H. Rackham</span></p>
									<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
								<div class="clear"> </div>
					 		 </div>
					 		 <div class="post-grid">
								<img src="images/team-2.jpg"  alt="" />
								<p><span>Finibus Bonorum</span></p>
									<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
								<div class="clear"> </div>
					 		 </div>
					 		 <div class="post-grid">
								<img src="images/team-3.jpg" alt="" />
								<p><span>Richard McClintock</span></p>
									<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
								<div class="clear"> </div>
					 		 </div>
						</div>-->
				  </div>
			   </div>
		    </div>
		</div> 
		</div>

	<!-- Footer -->
   <div class="footer">
   	 <div class="wrap">
   	 <div class="footer_grides">
	     <div class="section group">
				<!-- 
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
				</div> -->
				<!-- Navigation -->
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
				<!-- Location -->
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
				<p>The Carbon Hood © All Rights Reserved | Design by The Carbon Hood Team</p>
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

