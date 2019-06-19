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
      padding-top: 4rem! important;
    }
  </style>
  <body>
    <?php
    require("nav_bar.php");
    ?>
    <div class="container marketing">
      <div class="row">
        
        <!-- /.col-lg-3 -->
        <?php
        $p_id = $_GET['id'];
        require("connection.php");
        //Display the data from user table
        $sql = "SELECT * from PRODUCT where id = $p_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($data = $result->fetch_assoc()){
        ?>
        
        <div class="col-lg-4">
          <h1 class="my-4">Alpas Ecommerce</h1>
          <div class="list-group">
            <p>
              <?php
              $c_id= $data['category_id'];
              $sql2 = "SELECT category_name FROM category where id='$c_id'";
              $result2 = $conn->query($sql2);
              if ($result->num_rows > 0) {
              while ($datas = $result2->fetch_assoc()){
              echo "Category:<br>".$datas["category_name"];
              }
              }
              ?>
            </p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mt-4">
            <img class="card-img-top img-fluid" style ='height:200px; width:150px;' src="uploads/<?php echo $data['file']; ?>">
            <div class="card-body">
              <h3 class="card-title"> Product Name: <?php echo $data["title"];?>
              </h3>
              <h4> Price: <?php echo $data['sale_price']; ?> </h4>
              <p class="card-text"><?php echo $data['description']?></p>
              <!-- for rating -->
              <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
              <div class="form-group" id="rating-ability-wrapper">
                <label class="control-label" for="rating">
                  <span class="field-label-header">How would you rate this product?</span><br>
                  <span class="field-label-info"></span>
                  <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                </label>
                <h2 class="bold rating-header" style="">
                <span class="selected-rating">0</span><small> / 5</small>
                </h2>
                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                <i class="fa fa-star" aria-hidden="true"></i>
                </button>
              </div>
              <!-- rating.js file -->
              <script src="js/addons/rating.js"></script>
              <?php
              $user_id=$_SESSION['id'];
              if($user_id!= $data['user_id']){
              ?>
              <a href="order.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-lg active" role="button"aria-pressed="true">Order Now!!</a>
              <?php
              }
              ?>
              
            </div>
          </div>
          <!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Comment
            </div>
            <div class="card-body">
              <textarea name="comment" id="" cols="45" rows="4">
              
              </textarea>
              
              <hr>
              <a href="#" class="btn btn-success">Leave a Comment</a>
            </div>
          </div>
        </div>
        <?php
        }
        } ?>
      </div>
    </div>
    
    <?php
    require("footer.php");
    ?>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>