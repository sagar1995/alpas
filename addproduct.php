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
	<style>
		.marketing {
			margin-top: 4rem! important;
		}
	</style>
	<body>
		<div class="container marketing">
			<?php
			require("nav_bar.php");
			require("success.php");
					require("error.php");
			?>
			<div class="row justify-content-md-center">
				<div class="col-lg-10">
					<div class="card">
						<div class="card-body">
							<h2>Add product</h2>
							<form action="upload.php" class="needs-validation" enctype="multipart/form-data" method="POST" novalidate>
								<p>Fill up the form for more details </p>
								<div class="col-lg-10 testclass" id="fill-up">
									<div id="copy-this">
										<div class="form-group">
											<?php
												require("connection.php");
												$sql = "SELECT id,category_name FROM category";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
											?>
											<label for="CategorySelect">Category select</label>
											<select class="form-control" id="CategorySelect" name="id[]">
												<?php
													while ($data = $result->fetch_assoc()){
												?>
												<option value="<?php echo $data['id']; ?>">
													<?php
														echo $data["category_name"];
															}
													?>
												</option>
											</select>
											<?php
											
											}
											?>
										</div>
										<div class="form-group">
											<label for="item">Title:</label>
											<input type="text" class="form-control" id="title" placeholder="Enter the name of the item" name="title[]" required>
											<div class="valid-feedback">Valid.</div>
											<div class="invalid-feedback">Please fill out this field.</div>
										</div>
										<div class="form-group">
											<label for="description">Description:</label>
											<input type="text" class="form-control" id="description" placeholder="Description of the item" name="description[]" required>
											<div class="valid-feedback">Valid.</div>
											<div class="invalid-feedback">Please fill out this field.</div>
										</div>
										<div class="form-group">
											<label for="price">Sale Price:</label>
											<input type="number" class="form-control" id="sale_price" placeholder="Enter the actual price of the item" name="sale_price[]" required>
											<div class="valid-feedback">Valid.</div>
											<div class="invalid-feedback">Please fill out this field.</div>
										</div>
										<div class="form-group">
											<label for="price">Quantity</label>
											<input type="number" class="form-control" id="quantity" placeholder="How many quantity you have?" name="quantity[]" required>
											<div class="valid-feedback">Valid.</div>
											<div class="invalid-feedback">Please fill out this field.</div>
										</div>
										<div class="form-group">
											<label for="file">Click me to select image:</label>
											<input type="file" class="form-control" name="fileToUpload[]" id="fileToUpload">
										</div>
									</div>
									<hr>
								</div>	
								<button type="submit" class="btn btn-info btn-md">Submit form</button>
								<button type="button" onclick="addMore()" class="btn btn-info btn-md">Add More</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script>
		function addMore() {
			var element = document.getElementById("copy-this");
			var copy = element.cloneNode(true);
			document.getElementById("fill-up").appendChild(copy);
		};

		// This is function for invalid field (validation) by javascript
		(function() {
		'use strict';
			window.addEventListener('load', function() {
			var forms = document.getElementsByClassName('needs-validation');
			var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
			// document.getElementByTagName("button")[this].submit();
				if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();	
				}
			form.classList.add('was-validated');
			}, false);
		});
		}, false);
		})();
		</script>
		
		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>