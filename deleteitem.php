<?php
	require("connection.php");
	session_start();
	$oldImg;
	$idfordeletebtn=$_POST['delete_btn'];
	$sqli="SELECT file FROM product where id=".$idfordeletebtn;
	$queryi=mysqli_query($conn,$sqli);
	$oldImg;
	while ($row = mysqli_fetch_assoc($queryi)) {
		$oldImg=$row['file'];
	}

	$sql = "DELETE FROM product WHERE id=".$idfordeletebtn;
		if ($conn->query($sql) === TRUE) {
			$_SESSION["success"] = "Your item has been deleted successfully.";
			header("Location: myproduct.php");
			unlink("uploads/".$oldImg);
		}
		else {
			echo "Error deleting record: " . $conn->error;
		}
?>