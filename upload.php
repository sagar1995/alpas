<?php
	session_start();
	include("connection.php");
	$user_id = $_SESSION['id'];
	$countForm = count($_POST["title"]);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		for($i=0; $i<$countForm; $i++) {
			$category_id = $_POST["id"][$i]	;
			$product_title = $_POST['title'][$i];
			$product_description = $_POST['description'][$i];
			$sale_price = $_POST['sale_price'][$i];
			$quantity = $_POST['quantity'][$i];
			$product_file = $_FILES['fileToUpload'];
			$created = date('Y-m-d H:i:s');
			$productName = "product".time().$i.".jpg";
			$tmp_name = $product_file['tmp_name'][$i];

			//This is for uploading image file
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($productName);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if image file is a actual image or fake image
			$check = getimagesize($product_file["tmp_name"][$i]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
			
			// Check if file already exists
			if (file_exists($target_file))
			{
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($product_file["size"][$i] > 500000)
			{
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
			{
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0)
			{
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else
			{
				if (move_uploaded_file($product_file["tmp_name"][$i], $target_file))
				{
					echo "The file ". basename( $product_file["name"][$i]). " has been uploaded.";
					header('Refresh: 1; URL=http://localhost:alpas/homepage.php');
				} else
				{
					echo "Sorry, there was an error uploading your file.";
				}
			}

			$sql = "INSERT INTO product (category_id, title, description, sale_price, quantity, file, created,user_id) VALUES ('$category_id','$product_title','$product_description','$sale_price','$quantity','$productName','$created','$user_id')";
			if ($conn->query($sql) === TRUE) {
				$_SESSION["success"] = "Your product has been added sucessfully.";
			} else {
				$_SESSION["error"] = "Your product has not been added.Please try again.";
				header("Location: myprofile.php");
			}
		} 
		header("Location: myprofile.php?user_id=$user_id" );
	}
	
?>