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
							<li><a href="blog.php">Blog</a></li>
							<li  class="active"><a href="findacenter.php">Find your service center</a></li>
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
		 		    </div> -->
		 		    <div class="clear"></div>
		 		    </div>
               </div>
		  </div>

    <div class="wrap" style="margin-bottom: 500px;">
   		<div class="main">
	    	<div class="content">
	    		<form action="findacenter.php" method="post">
	    		 <?php
					//include_once "connect.php";
					$conn=mysqli_connect("localhost","root","") or die("Could not connect!");
					mysqli_select_db($conn, "carbonhood");
					$output = '';

					if(isset($_POST['search'])) 
					{

  						$searchq = $_POST['search'];
  						$searchq = preg_replace("#[^0-9a-z]i#","",$searchq);
  						if($_POST['brand']=="audi")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='audi' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="mercedes")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='mercedes' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="bmw")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='bmw' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="hyundai")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='hyundai' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="toyota")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='toyota' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="skoda")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='skoda' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="nissan")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='nissan' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="bentley")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='bentley' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="jaguar")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='jaguar' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="ford")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='ford' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="fiat")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='fiat' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  						else if($_POST['brand']=="volkswagen")
  						{
  							$query = mysqli_query($conn, "SELECT * FROM scenter WHERE brand='volkswagen' UNION SELECT * FROM scenter WHERE pincode LIKE '%$searchq%'") or die("could not search");
  						}
  
 						$count = mysqli_num_rows($query);
 						
  						if($count == 0)
  						{
    						$output = 'There were no search results!';
  						}
  						else
  						{
    						while($row = mysqli_fetch_array($query))
    						{
      							$center_name = $row['center_name'];
							    $center_add = $row['center_add'];
							    $brand = $row['brand'];
							    $phone_number = $row['phone_number'];
							    $gps = $row['gps'];
      
      							$output .='<div><b>'.$center_name.'</b></div><div>Address: '.$center_add.'</div><div>brand: '.$brand.'</div><div>Phone Number: '.$phone_number.'</div><div>'.$gps.'</div>';

    						}
  						}
					}
					?>
					<select name="brand" style="margin-left: 200px;">
							<option value="">Enter a make</option>
							<option value="audi">Audi</option>
							<option value="mercedes">Mercedes</option>
							<option value="bmw">BMW</option>
							<option value="hyundai">Hyundai</option>
							<option value="maruti">Maruti</option>
							<option value="toyota">Toyota</option>
							<option value="bentley">Bentley</option>
							<option value="bugatti">Jaguar</option>
							<option value="ford">Ford</option>
							<option value="fiat">Fiat</option>
							<option value="nissan">Nissan</option>
							<option value="volkswagen">Volkswagen</option>
							<option value="skoda">Skoda</option>
					</select>
					<input type="text" name="search" placeholder="Enter Zip code" style="width: 500px;"/>
					<input type="submit" value="Search"></input>
					<?php print("$output")?>
					</form>
				</div>
	    	</div> 
		</div>
	</div>  

	<!--Footer Start-->
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
				<!--Navigation-->
				<div class="col_1_of_4 span_1_of_4">
					<h3>Navigate</h3>
					          <ul>
						            <li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="services.php">Services</a></li>
									<li class="active"><a href="blog.php">Blog</a></li>
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
  <!--Footer End-->

		 <div class="copy_right">
		 	 <div class="wrap">
				<p>The Carbon Hood © All Rights Reserved | Designed by The Carbon Hood Team</p>
			 </div>
		</div>	

  </div>  
</body>
</html>

