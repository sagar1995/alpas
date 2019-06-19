<?php
	session_start();
	include ("connection.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];
		$token = $_POST['token'];
			
			$sql = "SELECT * FROM user WHERE email='$email' AND token='$token'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($data = $result->fetch_assoc()) {
					$email = $_POST['email'];
					$password = $_POST["password"];
					$sql = "UPDATE user set password = '$password' WHERE email = '$email'";
					if ($conn->query($sql) === TRUE) {
						$_SESSION["success"] = "Your password has been changed successfully.";
						header("Location: index.php");
					}
					else {
					header("Location: index.php");
					}
				}
				mysqli_close($conn);
			}
	}
?>