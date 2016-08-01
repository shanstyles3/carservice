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
							<li class="active"><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
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
	    	<h2>About Us</h2>
	    	<div class="section group">
				<div class="cont span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="images/about-img.jpg" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<p><span>When looking for a service center to maintain or repair your car, you have many choices.  There's the new car dealership, your repair shop and many independent workshops.</span></p>
					<p> To keep the quality of our network as strong as possible, an outside company inspects each service center individually, using both pre-arranged audits and surprise inspections.</p>
					<p>The detailed results are analyzed to develop ongoing training, based on what the shops need most. To remain in the network, our service centers must maintain the highest levels of technical ability and customer satisfaction.</p>
				</div>
				<!--<div class="team">
					<h2>Management Team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				    <div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/management-1.jpg" alt="" />
					  <h3>Jacalyn Markel</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/management-2.jpg" alt="" />
					  <h3>Steven Burge</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/management-3.jpg" alt="" />
					  <h3>Jon Mackenzie </h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
				</div>-->
				<div class="clear"></div>
			</div>		
				
				<div class="rightsidebar span_3_of_1">
					<div class="choose_us">
					<h2>Why Choose Us</h2>
						   <ul>
		  						<li>the number one reason is our reputation</li>
		  						<li>what our customers say about us</li>
		  						<li>with over 50% of our business being repeat</li>
		  						<li>we are clearly looking after our clients and community.</li>
		  						<li>wide range of vehicles to choose from</li>
		  						<li>you will gain access to centers at the best value</li>
		  						<li>Choose The Carbon hood for SELECTION</li>
		  						<li>Choose The Carbon hood for VALUE</li>
		  						<li>with such size comes great buying power</li>
		  						<li>when you are a customer you can expect the best service too.</li>
		  			        </ul>
		  			    </div>
		  			    <!--<div class="latest_comments">
					<h2>Latest Comments</h2>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 25th, 2013</p>
				</div>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 20th, 2013</p>
				</div>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 15th, 2013</p>
				</div>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 15th, 2013</p>
				</div>
				<a href="#" class="button button-icon button-icon-demo">See All</a>
				</div>-->
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
				<p>The Carbon Hood © All Rights Reserved | Designed by The Carbon Hood Team</p>
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

