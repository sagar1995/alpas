<?php
	session_start();
	require("connection.php");
	$user_id=$_SESSION['id'];

	$idforupdatebtn=$_POST['update_btn'];
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$address = $_POST["address"];
		$created = date('Y-m-d H:i:s');    //file array

			$sql = "UPDATE user set username = '$username', password = '$password', email = '$email', first_name = '$first_name', last_name = '$last_name', address = '$address', created = '$created' WHERE id = '$idforupdatebtn'";
		if ($conn->query($sql) === TRUE)
		{
			$_SESSION["success"] = "Your profile has been updated successfully";
			header("Location: myprofile.php?user_id=$user_id");
		} else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			$conn->close();
	}
?>