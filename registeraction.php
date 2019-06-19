<?php
	session_start();
	include("connection.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$address = $_POST["address"];
		$created = date('Y-m-d H:i:s');    //file array

			$sql = "INSERT INTO user (username, password, email, phone, first_name, last_name, address, created) VALUES ('$username','$password','$email', '$phone', '$first_name', '$last_name', '$address', '$created')";
			
			if ($conn->query($sql) === TRUE) {
				$_SESSION["success"] = "Your account has been added sucessfully.";
				header("Location: index.php" );
			} else {
				echo "";
			 }
				$conn->close();
	}
?>