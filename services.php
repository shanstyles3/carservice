<?php
	session_start();
	require_once('connect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Carbon Hood</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--Scroll top -->
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
		 				<a href="index.php"><img src="images/logo.jpg" width="170px" height="150px"  alt="" /></a>
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
							<li class="active"><a href="services.php">Services</a></li>
							<li><a href="blog.php">Blog</a></li>
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
	    	<h2>Services</h2>
	    	<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <img src="images/service-1.png" alt="" />
					</div>
				    <div class="text list_2_of_1">
						<h3>Live Support</h3>
						<p>Chat with experts online or have us call you right away. You can also schedule a time for us to call you when you’re ready. Answer a few questions and we’ll give you the best options.</p>
						<!--<a href="#" class="button button-icon button-icon-demo">More Info</a>-->
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <img src="images/service-2.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						  <h3>Repair Services</h3>
						  <p>Want to know what it's going to cost to service or repair your vehicle? Get an instant estimate for many of the most common repairs, specifically for your vehicle. when you are a customer of The Car Company you can expect the best service too. We have a friendly expert team who have a combined industry experience of over 150 years to answer all your questions and full workshop facilities to make repairs for those unexpected mishaps and all your vehicle maintenance requirements.</p>
						  <!--<a href="#" class="button button-icon button-icon-demo">More Info</a>-->
					</div>
				</div>
			</div>  
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <img src="images/service-3.png" alt="" />
					</div>
				    <div class="text list_2_of_1">
						<h3>Complete Care</h3>
						<p>Complete Care is our personal commitment to you, your car & your driving pleasure. Our combination of Standard, Extended, Accessories & Spare Parts Warranty, Low Maintenance Costs & 24x7 Roadside Assistance will keep your car running smoothly & you enjoy miles of happy motoring!</p>
						<!--<a href="#" class="button button-icon button-icon-demo">More Info</a>-->
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <img src="images/service-4.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						  <h3>Spare Parts</h3>
						  <p>When you are busy, it is very common that you do not bother asking about the spare parts brand your mechanic has replaced. You stress upon having seen old parts.Critical components are water pumps, alternators, starters, fuel pumps, etc and non-critical items are air filters, spark plugs, fluids, brake pads, etc. Ask your mechanic to use his best judgment when determining critical items. You will probably pay more for these parts now, but in the long run you will be glad you did.</p>
						 <!--<a href="#" class="button button-icon button-icon-demo">More Info</a>-->
					</div>
				</div>
			</div>  
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <img src="images/service-5.png" alt="" />
					</div>
				    <div class="text list_2_of_1">
						<h3>Sales Services</h3>
						<p>Did you ever wonder why it can take so long to buy a car? Have you questioned whether the salesperson really has to check with his manager to get a deal approved? Do you want to know why a car salesman can't just give you his best price upfront? We know there are things about car shopping that seem mysterious. And we're here to give you some insight into what's going on.</p>
						<!--<a href="#" class="button button-icon button-icon-demo">More Info</a>-->
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <img src="images/service-6.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						  <h3>Tyre Services</h3>
						  <p>Your complete automotive repair experts and our services extend much further than tyres, Check your tyre pressures once a month. The correct tyre pressure will dramatically reduce tyre wear and fuel consumption.</p>
						  <!--<a href="#" class="button button-icon button-icon-demo">More Info</a>-->
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

				<!--Location details-->
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
				<p>The Carbon Hood © All Rights Reserved | Designed by The Carbon Hood Team</a></p>
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

