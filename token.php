<?php
	session_start();
	include("connection.php");
	
	if(isset($_POST['submit_btn'])) {
		if(empty($_POST['email'])) {
			$error = "Email is Invalid";
		}
		else {
			$email = $_POST['email'];
			$token = $_POST['token'];
			$sql = "UPDATE user set token = '$token' WHERE email = '$email'";
			if ($conn->query($sql) === TRUE) {
				$_SESSION["success"] = "Your token has been added sucessfully.";
				header("Location: reset_password.php");
			} else {
				$_SESSION["error"] = "Your token has not been added.Please try again.";
				header("Location: forgotpassword.php");
			}
		}
	}
?>