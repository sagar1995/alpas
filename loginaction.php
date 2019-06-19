	<?php
	session_start();
	include ("connection.php");
		$error = '';	//Variable to store error message;
	if(isset($_POST['submit_btn'])) {
		if(empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is Invalid";
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND username='$username'");
			
			$rows = mysqli_num_rows($query);
			if($rows == 1) {
				while($row =mysqli_fetch_assoc($query)){
					$_SESSION["username"] = $row['username'];
					$_SESSION["id"] = $row['id'];
				}
				
					//setting the dummy variable as a session name to $username now you can use username or password into any page
				header("Location: homepage.php"); //redirecting to other page
			} else {
				$_SESSION["error"] = "Invalid Username or Password.Please try again.";
			header("Location: index.php");
			}
				mysqli_close($conn); 	//closing connection
		}
	}
?>