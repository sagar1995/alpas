<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		
		<title> Alpas Technology Pvt. Lmd </title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<!-- CSS Files -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/myfrontend.css" rel="stylesheet">
		<style>
			.custom-container {
				margin-top: 5rem! important;
			}

		</style>
	</head>
	<body>
		<div class="container custom-container">
			<?php
				require("nav_bar.php");
				require("success.php");
				require("error.php");
			?>
			<h1 align="center">Product List </h1>
			<div class="row">
				<?php
				require("connection.php");
				$user_id=$_SESSION['id'];
				
				//Display the data from user table
				$sql = "SELECT id,title,description,sale_price,file FROM product WHERE user_id!=$user_id";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				while($data = $result->fetch_assoc()) { ?>
				<div class="col-sm-4 custom-bottom-margin">
					<div class="card" style="width:100%; height:100%;">
						<img src="uploads/<?php echo $data['file'];?>" class="card-img-top">
						<div class="card-body">
							<h3 class="card-title">Name:  <?php echo $data['title'];?></h3>
							<h5>Price: <?php echo $data['sale_price'];?></h5>
							<p class="card-text"><?php echo $data['description'];?></p>
							<div class="card-footer">
								<form action="viewitem.php?id=<?php echo $data['id']; ?>" method="POST">
									<input type="hidden" name="view_btn">
									<button class="btn btn-info" type="submit">View</button>
									<a href="order.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-md active" role="button"aria-pressed="true">Order Now!!</a>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php
				}
				}
				else
				{
				echo "0 results";
				}
				$conn->close();
				?>
			</div>
		</div> <br> <br>
		<?php require("footer.php") ?>
		<script src="jquery/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>