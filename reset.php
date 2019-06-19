<!DOCTYPE html>
<html lang="en">
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
	.container-login100-form-btn {
		position: relative;
		display: inline-block;
		}

	.container-login100-form-btn .tooltiptext {
	visibility: hidden;
	width: 140px;
	background-color: #555;
	color: #fff;
	text-align: center;
	border-radius: 6px;
	padding: 5px;
	position: absolute;
	z-index: 1;
	bottom: 150%;
	left: 50%;
	margin-left: -75px;
	opacity: 0;
	transition: opacity 0.3s;
	}
	.container-login100-form-btn .tooltiptext::after {
	content: "";
	position: absolute;
	top: 100%;
	left: 50%;
	margin-left: -5px;
	border-width: 5px;
	border-style: solid;
	border-color: #555 transparent transparent transparent;
	}
	.container-login100-form-btn:hover .tooltiptext {
	visibility: visible;
	opacity: 1;
	}
</style>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/login_bg.jpg');">
			<div class="wrap-login100 p-t-60 p-b-120">
				<?php
				include ("connection.php");
					$error = '';
					if($_SERVER['REQUEST_METHOD'] === 'POST') {
						if(empty($_POST['email'])) {
							header("Location: forgotpassword.php");
						}
						else {
							$email = $_POST['email'];
							$token = md5(uniqid(rand(), true));
							$query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
							$rows = mysqli_num_rows($query);
							if($rows == 1) {
								while($rows = mysqli_fetch_assoc($query)) {
				?>
				<h2> Token Link </h2> <br>
				<form class="login100-form validate-form" action="token.php" method="POST">
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="email" name="email" value="<?php echo $rows['email'] ?>" placeholder="Enter your Email">
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" id="myInput" type="text" value="<?php echo $token ?>" name="token" placeholder="Token for reset">
					</div>
					<div class="container-login100-form-btn p-t-10">
						<button type="button" class="login100-form-btn" onclick="myFunction()" onmouseout="outFunc()">
						<span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
						Copy text
						</button>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="submit_btn" type="submit">
						Next
						</button>
					</div>
				</form>
				<?php
								}
							} else {
								$_SESSION["error"] = "Invalid email.Please try again.";
							}
							mysqli_close($conn);
						}
					}
				?>
			</div>
		</div>
	</div>
	<script>
		function myFunction() {
		var copyText = document.getElementById("myInput");
		copyText.select();
		document.execCommand("copy");
		
		var tooltip = document.getElementById("myTooltip");
		tooltip.innerHTML = "Copied: " + copyText.value;
		}
		function outFunc() {
		var tooltip = document.getElementById("myTooltip");
		tooltip.innerHTML = "Copy to clipboard";
		}
	</script>
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>