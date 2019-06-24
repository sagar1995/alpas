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
  </head>
  <style>
  .content {
  margin-top: 5rem! important;
  }
  </style>
  
  <body>
    <?php
    require("nav_bar.php");
    ?>
    
    <div class="container">
      <div class="content">
        <?php
        require("success.php");
        require("error.php");
        ?>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="images/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="images/me.jpg" alt="...">
                    <h5 class="title"><?php echo $name; ?></h5>
                  </a>
                  
                </div>
                <p class="description text-center">
                  "I like the way you work it
                  <br> No diggity
                  <br> I wanna bag it up"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                
              </div>
            </div>
            
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Our Team</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  
                  <?php
                  require("connection.php");
                  $user_id=$_SESSION['id'];
                  
                  $sql = "SELECT * FROM user
                  WHERE id!=$user_id
                  ORDER by id desc limit 3";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                  while($data = $result->fetch_assoc())
                  {
                  ?>
                  
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="images/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        <?php echo $data["username"]; ?>
                        <br />
                        <span class="text-muted">
                          <small>Offline</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <?php } } ?>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <?php
                require("connection.php");
                $user_id=$_SESSION['id'];
                $sql = "SELECT id,email,phone,first_name,last_name,address,created FROM user WHERE id=".$_GET["user_id"];
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while($data = $result->fetch_assoc())
                {
                ?>
                <form class="needs-validation" action="myprofileaction.php" method="POST" enctype="multipart/form-data">
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="first_name">First name:</label>
                        <input type="text" class="form-control" id="first_name" value="<?php echo $data['first_name']?>" name="first_name" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" value="<?php echo $data['last_name']?>" name="last_name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $data['email']?>" name="email" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="address" class="form-control" id="address" value="<?php echo $data['address']?>" name="address" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="Lalitpur">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="Nepal">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" class="form-control" id="phone" value="<?php echo $data['phone']?>" name="phone" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input type="hidden" value="<?php echo $data['id']; ?>" name="update_btn">
                      <button type="submit" class="btn btn-outline-info btn-round">Update Profile</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-control">
                        <a href="myorderlist.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-md active" role="button"aria-pressed="true">My cart List</a>
                        <a href="addproduct.php" class="btn btn-success btn-md active" role="button"aria-pressed="true">Add Product!</a>
                        <a href="myproduct.php" class="btn btn-info btn-md active" role="button"aria-pressed="true">Your Product!</a>
                      </div>
                    </div>
                  </div>
                </form>
                <form action="interested_categories.php" method="POST">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <?php
                        require("connection.php");
                        $sql = "SELECT id,category_name FROM category";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) { ?>
                        <label for="categories">Interested Categories:- </label> <br><br>
                        <?php
                        while ($data = $result->fetch_assoc()){
                        ?>
                        <?php echo $data["category_name"]; ?><input name="chkbox[]" class="form-control" type="checkbox" value="<?php echo $data['id']; ?>"><br>
                        <?php } } ?>
                        <button value="submit" class="btn btn-active" type="submit" name="sub_cat">Submit</button>
                      </div>
                    </div>
                  </div>
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
    </div>
    <?php
    require("footer.php");
    ?>
    
    
    <script>
    // This is function for invalid field (validation) by javascript
    (function() {
    'use strict';
    window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
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