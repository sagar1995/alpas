<?php
	require("connection.php");
	session_start();
// Deleting the data from the user table
	$idforupdatebtn=$_POST['update_btn'];
	$sqli="SELECT file FROM product where id=".$idforupdatebtn;
	$queryi=mysqli_query($conn,$sqli);
	$oldImg;
	while ($row = mysqli_fetch_assoc($queryi)) {
		$oldImg=$row['file'];
	}
	$file="uploads/".$oldImg;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$product_item = $_POST["title"];
		$description = $_POST["description"];
		$sale_price = $_POST["sale_price"];
		$product_file = $_FILES["fileToUpload"];
		$productName = "product".time().".jpg";
		$tmp_name = $product_file['tmp_name'];
		$created = $_POST["created"];
		$sql = "UPDATE product set title = '$product_item', description = '$description', sale_price = '$sale_price', file = '$productName', created = '$created' WHERE id = '$idforupdatebtn'";
		unlink("uploads/".$oldImg);
		if ($conn->query($sql) === TRUE)
		{
			$_SESSION["success"]="Your product has been updated successfully";
			header("Location: myproduct.php");
		} else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			$conn->close();
	}
//This is for uploading image file
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($productName);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["btn_submit"]))
	{
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
	$uploadOk = 1;
		} else
		{
		echo "File is not an image.";
	$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file))
	{
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000)
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
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
		{
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else
		{
			echo "Sorry, there was an error uploading your file.";
		
		}
}