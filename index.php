<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alpas Technology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    
    <div class="limiter">
      <div class="container-login100" style="background-image: url('images/login_bg.jpg');">
        <div class="wrap-login100 p-t-220 p-b-20">
          <form class="login100-form validate-form" action="loginaction.php" method="POST">
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
              <input class="input100" type="text" name="username" placeholder="Username">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
              <input class="input100" type="password" name="password" placeholder="Password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <div class="container-login100-form-btn p-t-10">
              <button class="login100-form-btn" name="submit_btn" type="submit">
              Login
              </button>
              <?php
              session_start();
              require("success.php");
              require("error.php"); ?>
            </div>
            <div class="text-center w-full p-t-25 p-b-230">
              <a href="forgotpassword.php" class="txt1">
                Forgot Username / Password?
              </a> <br>
              <a class="txt1" href="register.php">
                Create new account
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
            
          </form>
          <?php
          if(isset($_GET['mess']) && ($_GET['mess']=="sec"))
          {
          echo '
          <div class="alert alert-success">
          <strong>Success!</strong>New record created successfully.</div>';
          }
          ?>
        </div>
      </div>
    </div>
    
    
    
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>