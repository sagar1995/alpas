<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		
		<title> Alpas Technology Pvt. Lmd </title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<!-- CSS Files -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/myfrontend.css" rel="stylesheet">
	</head>
	<body>
		<?php
			require("nav_bar.php");
			require("connection.php");
			require("success.php");
			
			$sql = "SELECT id,title,description,sale_price,file,created FROM product WHERE id=".$_POST["update_btn"];
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($data = $result->fetch_assoc()) {
		?>
		<style>
			.custom-container {
				margin-top: 4rem!important;
			}
		</style>
		<div class="container custom-container">
			<div class="row justify-content-md-center">
				<div class="col-md-8 mb-5">
					<div class="card">
						<div class="card-body">
							<h2>Update product</h2>
							<p>Fill up the form for more details </p>
							<p>Try to submit this form before filling out the input fields</p>
							<form action="updateitemaction.php" class="needs-validation" enctype="multipart/form-data" method="POST" novalidate>
								<div class="form-group">
									<label for="title">Title:</label>
									<input type="text" class="form-control" id="title" value="<?php echo $data['title']?>" name="title" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
									<label for="description">Description:</label>
									<input type="text" class="form-control" id="description" value="<?php echo $data['description']?>" name="description" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
									<label for="sale_price">Price:</label>
									<input type="number" class="form-control" id="sale_price" value="<?php echo $data['sale_price']?>" name="sale_price" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
									Select image to upload:
									<input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $data['file']?>">
								</div>
								<div class="form-group">
									<label for="created">Created:</label>
									<input type="date" class="form-control" id="created" value="<?php echo $data['created']?>" name="created" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<input type="hidden" value="<?php echo $data['id']; ?>" name="update_btn">
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
				<?php
					}
				}
				?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require("footer.php"); ?>
		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>