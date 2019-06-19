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
		<style>
			.custom-container {
				margin-top: 4rem!important;
			}
		</style>
		
		<div class="container custom-container">
			<?php
			require("nav_bar.php");
			require("connection.php");
			$p_name= $_GET['id'];
			$sql = "SELECT title,sale_price FROM product where id='$p_name'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			while ($data = $result->fetch_assoc()){
			?>
			<div class="row justify-content-md-center">
				<div class="col-md-8 mb-5">
					<div class="card">
						<div class="card-body">
							<h2 style='text-align: center;'>Order Form</h2>
							<p>Fill up the form for more details </p>
							<p>Try to submit this form before filling out the input fields</p>
							<form action="orderaction.php" class="needs-validation" enctype="multipart/form-data" method="POST" novalidate>
								<input type="hidden" name="pname" value="<?php echo $p_name; ?>">
								<div class="form-group">
									<label for="title">Title:</label>
									<input type="text" class="form-control" id="title" value="<?php echo $data['title'];?>" name="title" disabled>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
									
								</div>
								<div class="form-group">
									<label for="total_price">Total Price:</label>
									<input type="number" class="form-control" id="sale_price" value="<?php echo $data['sale_price'];?>" name="price" readonly>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
									<label for="quantity">Quantity</label>
									<input type="number" min="1" max="10" class="form-control" id="quantity" onchange="myFunction()" placeholder="Enter how many item you want?" name="quantity" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							
								<?php
									}
								}?>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require("footer.php"); ?>
		<script>
		function myFunction() {
			var quantity = document.getElementById("quantity").value;
			var price = document.getElementById("sale_price").value;
			var totalPrice = quantity * price;
			document.getElementById("sale_price").value = totalPrice;
		}
		</script>
		
	</body>
</html>