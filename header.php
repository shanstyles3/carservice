<?php
	session_start();
	require_once('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CarService</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
	</head>
	<body>
	<div class="header">
		<div class="header_top">
		 	 <div class="wrap">
				<div class="dail">
					<?php 
						//include_once "connect.php";
						if(!isset($_SESSION['email']) || $_SESSION['email'] == '') { ?>
			
						<a href="signin.php">Sign In</a>
						<a href="signup.php">Sign Up</a>
					</div>
						<?php } else { ?>
					<div class="dail">
						<a href="logout.php">Logout</a>
					
						<?php } ?>
	</div>
	</div>
	</div>
	</div>
	</body>
</html>