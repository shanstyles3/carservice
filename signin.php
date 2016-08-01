<?php
include_once "connect.php";
session_start();
if(isset($_POST['submit']))
{
 //$db=mysqli_connect('localhost','root','') or die(mysqli_error());
 //mysqli_select_db($conn, 'carservice') or die(mysqli_error($conn));
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $password=mysqli_real_escape_string($conn, $_POST['password']);
 if($email!=''&&$password!='')
 {
   $query=mysqli_query($conn, "select * from userdetails where email='".$email."' AND password='".$password."'") or die(mysqli_error($conn));
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['email']=$email;
    header("location: index.php");
   }
   else
   {
    echo"<script type='text/javascript'>alert('Incorrect Email or password');</script>";
   }
 }
 else
 {
  echo"<script type='text/javascript'>alert('Enter Email and password');</script>";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Carbon Hood</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<!-- Scroll top -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!---End  Scroll top -->
<!--login card css-->
 <style type="text/css">
 .Main{
  /*background-color: grey;*/
  background-image: url("images/background.jpg");
  height: 1000px;
  
 }
 .login-card {
  display: block;
  position: center;
  padding: 40px;
  width: 274px;
  background-color: #4d90fe;
  margin: 40px auto 10px;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
}

.login-card h1 {
  background-color: #4d90fe;
  font-weight: 100;
  text-align: center;
  font-size: 2.3em;
}

.login-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-card input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-card input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.login-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-card a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 100%;
  text-align: center;
  font-size: 12px;
}
</style>
</head>
<body>
<div class="Main">
  <div class="header">  	
		 <div class="header_top">
		 	<div class="wrap">
		 		<div class="logo">
		 			<a href="index.php"><img src="images/logo.jpg" width="170px" height="150px" alt="" /></a>
				</div>
				<div class="clear"></div>
			</div>	
		 </div>		
  </div>
	<div class ="bodybg">
	  <div class="login-card">
			<h1>Log-in</h1><br>
			<form action="signin.php" method="post">
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" name="submit" class="login login-submit" value="login">
			</form>
    
      <div class="login-help">
        <a href="signup.html">Register</a> • <a href="#">Forgot Password</a>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
   <!--<div class="footer">
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
				<!--<div class="col_1_of_4 span_1_of_4">
					<h3>Navigate</h3>
					          <ul>
						           <li><a href="index.html">Home</a></li>
						     		<li><a href="about.html">About</a></li>						     			
						     		<li><a href="services.html">Services</a></li>
						     		<li><a href="blog.html">Blog</a></li>						     		
						     		<li><a href="contact.html">Contact</a></li>
						   	   </ul>
				</div>-->
				<!-- Location -->
				<!--<div class="col_1_of_4 span_1_of_4">
					<h3>Location</h3>
					      <ul>
						  	  <li>Mira Road Jungle</li>
						  	  <li>Outside Mumbai</li>
						  	   <li>Somewhere in India !.</li>
						  	 <li><span>E-mail :</span> viviananthony04@ymail.com</li>
						  	 <li><span>Telephone :</span>*Sorry no Network Connection*</li>
						  </ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
				<h4>Call Us Now</h4>
				<ul>
				<li><p><img src="images/mobile.png">9664286842</p></li>
				<li><p><img src="images/chat.png">Live Chat (Whatsapp)</p></li>
				</ul>
				</div>
				</div>
			</div>
	    </div>
  </div>
		 <div class="copy_right">
		 	 <div class="wrap">
				<p>Car Repairs & Services © All Rights Reserved | Design by  <a href="#">Vivian Anthony</a></p>
			 </div>
		</div>	-->
		<!-- scroll Top -->
	 <!--<script type="text/javascript">
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
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>-->
	<!-- End scroll Top -->

  <!--</div>-->
</body>
</html>