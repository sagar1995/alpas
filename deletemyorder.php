<?php
	session_start();
	require("connection.php");

// Deleting the data from the user table

	$idd=$_POST['deletemyorder_btn'];
	
	$sql = "DELETE FROM order_detail WHERE id=".$idd;
		if ($conn->query($sql) === TRUE) {
			$_SESSION["success"] = "Your order has been cancelled.";
			header("Location: myorderlist.php");		
		}	
		else {
			$_SESSION["error"] = "Your order has not been cancelled.Please try again.";
			header("Location: myorderlist.php");
		}
?>