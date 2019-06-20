<?php
	session_start();
	include("connection.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$order_quantity=$_POST['order_quantity'];
		$product_quantity = $_POST['product_quantity'];
		$product_id = $_POST['product_id'];
		$order_id = $_POST['order_id'];
		$new_product_quantity = $product_quantity + $order_quantity ;
		
	$sql = "DELETE FROM order_detail WHERE id = $order_id";
		if ($conn->query($sql) === TRUE) {
		
	$sql1 = "UPDATE product SET quantity = '$new_product_quantity' WHERE id = $product_id";
		
		if ($conn->query($sql1) == TRUE) {
		$_SESSION["error"] = "Your order has been cancelled sucessfully.";
		header("Location: viewallproduct.php");
		}
	} else
	{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	}
	?>