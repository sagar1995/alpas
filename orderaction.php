	<?php
	session_start();
	include("connection.php");
	$user_id = $_SESSION['id'];

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$product_id = $_POST["pname"];
		$quantity = $_POST["quantity"];
		$created = date('Y-m-d H:i:s');      
		$total_price = $_POST["price"];  
		
		$sql = "INSERT INTO order_detail (user_id,product_id,quantity,created,total_price) VALUES ('$user_id','$product_id','$quantity','$created_date',$total_price)";
		if ($conn->query($sql) === TRUE)
		{
			$_SESSION["success"] = "You have ordered successfully.";
			header("Location: viewallproduct.php");
		} else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			$conn->close();
	}
?>