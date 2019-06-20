<?php
	session_start();
	include("connection.php");
	$user_id = $_SESSION['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$product_id = $_POST["pname"];
		$order_quantity = $_POST["order_quantity"];
		$created = date('Y-m-d H:i:s');
		$total_price = $_POST["total_price"];
		$product_quantity = $_POST["product_quantity"];
		
		$sql = "INSERT INTO order_detail (user_id,product_id,quantity,created,total_price) VALUES ('$user_id','$product_id','$order_quantity','$created',$total_price)";
		if ($conn->query($sql) === TRUE) {
			$new_product_quantity = $product_quantity - $order_quantity;
			$sql1 = "UPDATE product SET quantity='$new_product_quantity' WHERE id=$product_id";
			if ($conn->query($sql1) == TRUE) {
				$_SESSION["success"] = "You have ordered successfully.";
				header("Location: viewallproduct.php");
			}
		} else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			$conn->close();
	}
?>