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
			?>
			<h1 align="center">Your Product List </h1>
			
			<div class="row">
				
				<?php
				include("connection.php");
				$user_id = $_SESSION['id'];
					$sql = "SELECT id,title,sale_price,file,description from product where user_id=$user_id";
				$result = $conn->query($sql);
				
				if (mysqli_num_rows($result)>0) {
				while ($data = $result->fetch_assoc()) { ?>
				
				<div class="col-sm-4 custom-bottom-margin">
					<div class="card" style='height:auto; width:200px;'>
						<img src="uploads/<?php echo $data['file'];?>" class="card-img-top">
						<div class="card-body">
							<h3 class="card-title">Name:  <?php echo $data['title'];?></h3>
							<h5>Price: <?php echo $data['sale_price'];?></h5>
							<p class="card-text"><?php echo $data['description'];?></p>
						</div>
						<div class="card-footer">
							<form action="viewitem.php?id=<?php echo $data['id']; ?>" method="POST">
								<input type="hidden" name="view_btn">
								<button class="btn btn-success" type="submit">View</button>
							</form>
							<br>
							<form action="deleteitem.php" method="POST">
								<input type="hidden" name="delete_btn" value="<?php echo $data['id']; ?>">
								<button class="btn btn-danger" type="submit">Delete</button>
							</form>
							<br>
							<form action="updateitem.php" method="POST">
								<input type="hidden" name="update_btn" value="<?php echo $data['id']; ?>">
								<button class="btn btn-info" type="submit">Update</button>
							</form>
							<hr>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				<?php
				}
					else
				{
				echo "You have no item in the list";
				}
				
				$conn->close();
				?>
			</div>
		</div>
	</div>
	<?php
	require("footer.php");
	?>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>