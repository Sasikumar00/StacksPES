<?php

session_start();
// error_reporting(E_ALL ^ E_WARNING);
include("connection.php");
//check if the data exists in database
if($_SERVER['REQUEST_METHOD']=='POST'){
	$username = $_POST['name'];
	//add slashes to prevent sql injection
	$username = addslashes($username);
	$password = $_POST['email'];
	//add slashes to prevent sql injection
	$password = addslashes($password);
	$sql = "SELECT * FROM users WHERE email='$password'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row['email']==$password){
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['userName'] = $row['name'];
		$_SESSION['userEmail'] = $row['email'];
		header("location: home1.php");
		die;
	}
	else{
		//insert the data into database and login
		$sql = "INSERT INTO users (name, email) VALUES ('$username', '$password')";
		$result = mysqli_query($con,$sql);
		$sql = "SELECT * FROM users WHERE email='$password'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['userName'] = $row['name'];
		header("location: home1.php");
		die;
	}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Stacks | login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background: black">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="entry.php" method="POST">
					<span class="login100-form-title p-b-26">
						<h1>Stacks Demo</h1>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email" id="email" required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" id="name" required>
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

</body>
</html>