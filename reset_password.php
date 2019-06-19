<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Alpas Technology</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<style>
		h2 {
			color: #E8EBF7;
			text-align: center;
		}
	</style>
	
	<body>
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/login_bg.jpg');">
				<div class="wrap-login100 p-t-70 p-b-120">
					<h2>Reset Password Form</h2> <br>
					<form id="form" class="login100-form validate-form" action="update_password.php" method="POST">
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
							<input class="input100" type="email" name="email" placeholder="Enter your email">
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							<input class="input100" id="password" type="password" name="password" placeholder="Password">
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Confirm your Password">
							<input class="input100" id="confirm" type="password" name="confirm" placeholder="Re-Entered your password">
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Copy this Token Link">
							<input class="input100" type="text" name="token" placeholder="Token Link">
						</div>
						<div class="container-login100-form-btn p-t-10">
							<button class="login100-form-btn" name="submit_btn" type="submit">
							Submit Form
							</button>
							<?php
								session_start();
								require("success.php");
							?>
						</form>
					</div>
				</div>
			</div>
			<script>
				document.getElementById("confirm").addEventListener("focusout", myFunction);
				function myFunction() {
					var password = document.getElementById("password").value;
					var confirm = document.getElementById("confirm").value;
					
					if(password!=confirm) {
					alert("password are not same");
					}
				}
			</script>
			<script src="jquery/jquery-3.2.1.min.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/select2.min.js"></script>
		</body>
	</html>