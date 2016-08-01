<?php
/* Form Required Field Validation */

/* Validation to check if gender is selected */
/*if(!isset($message)) {
if(!isset($_POST["gender"])) {
$message = " Gender field is required";
}
}*/

/* Validation to check if Terms and Conditions are accepted */
/*if(!isset($message)) {
if(!isset($_POST["terms"])) {
$message = "Accept Terms and conditions before submit";
}
}*/
include_once "connect.php";
session_start();
if(isset($_POST['signup']))
  {



    //$db=mysqli_connect('localhost','root','') or die(mysqli_error());
 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if($_POST['username']=='')
    {
      echo"<script type='text/javascript'>alert('Enter Username');</script>";
    }

    else if($_POST['password']=='') 
    {
      echo "<script type='text/javascript'>alert('Enter Password');</script>";
    }

    /* Password Matching Validation */

    else if($_POST['password'] != $_POST['confirm_password'])
    { 
      echo "<script type='text/javascript'>alert('Passwords should be the same');</script>";
    }

    /* Email Validation */
    else if($_POST['email']=='') 
    {
      echo "<script type='text/javascript'>alert('Enter Email');</script>";
    }

    else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
    {
      echo "<script type='text/javascript'>alert('Invalid Email');</script>";
    }

    else
    {
      $query = "INSERT INTO userdetails (username, email, password) VALUES ('" . $_POST["username"] . "', '" . $_POST["email"] . "', '" . ($_POST["password"]) . "')";
      $result = mysqli_query($conn, $query);
      if(!empty($result)) 
      {
        echo "<script type='text/javascript'>alert('You have registered successfully');</script>";  
        unset($_POST);
        header("location: signin.php");
      } 
      else 
      {
        echo "Problem in registration. Try Again!"; 
      }
    }
  }
?>
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
<!--login card css-->
 <style type="text/css">
 .Main{
  /*background-color:grey;*/
  background-image: url("images/background.jpg");
  height:1000px;
 }
 .login-card {
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
<div class="bodybg">
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
     	
 <div class="login-card">
    <h1>Sign-up</h1><br>
  <form action="signup.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="email" placeholder="Email-ID">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirm_password" placeholder="Re-Type Password">
    <input type="submit" name="signup" class="login login-submit" value="Sign-Up">
  </form>
    
  <div class="login-help">
    <a href="signin.php">Already a user? Login</a>
  </div>
</div>
</div>
</div>
</body>
</html>