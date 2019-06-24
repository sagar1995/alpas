<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alpas Technology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
  </head>
  <body>
    
    <div class="limiter">
      <div class="container-login100" style="background-image: url('images/login_bg.jpg');">
        <div class="wrap-login100 p-t-50 p-b-50">
          <form id="form" class="login100-form validate-form" action="registeraction.php" method="POST">
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
              <input class="input100" type="text" name="username" placeholder="Username">
              <span class="focus-input100"></span>
            </div>
            
            <div class="wrap-input100 validate-input m-b-10" data-validate = "password is required">
              <input class="input100" type="password" id="password" name="password" placeholder="Password">
              <span id="password" class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
              <input class="input100" type="password" id="confirm" name="confirm" placeholder="Confirm Password">
              <span id="confirm" class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
              <input class="input100" type="email" name="email" placeholder="Email">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Phone is required">
              <input class="input100" type="number" name="phone" placeholder="Phone">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "First name is required">
              <input class="input100" type="text" name="first_name" placeholder="First Name">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "Last name is required">
              <input class="input100" type="text" name="last_name" placeholder="Last Name">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-10" data-validate = "address is required">
              <input class="input100" type="text" name="address" placeholder="Address">
              <span class="focus-input100"></span>
            </div>
            
            <div class="text-center w-full">
              <button class="login100-form-btn" name="submit_btn" onclick="myTry()" type="button">
              Register
              </button>
              <br>
              <a href="index.php" class="txt1">
                Sign In
              </a>
            </div>
          </div>
        </div>
        
        <script>
          $(document).ready(function(){
            $("#confirm").focusout(function(){
              var password = $("#password").val();
              var confirm = $("#confirm").val();

              if(password!=confirm){
                alert("Both don't match");
                $("#password").val("");
                $("#confirm").val("");

              }
            });
          });
        </script>
        
        
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
      </body>
    </html>