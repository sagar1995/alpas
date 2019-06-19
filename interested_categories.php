<?php
	session_start();
	include("connection.php");
	$user_id = $_SESSION['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$category_id = $_POST['chkbox'];
		foreach($category_id as $chkNew){
			$sql = "INSERT INTO interested_categories (user_id,category_id) VALUES ('$user_id','$chkNew')";
			if ($conn->query($sql) === TRUE){
				$_SESSION["success"] = "Your Category has been added sucessfully.";
				header("Location: myprofile.php?user_id=$user_id" );
			}
		}	
	}
?>