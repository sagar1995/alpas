<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title> Alpas Technology Pvt. Lmd </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/myfrontend.css" rel="stylesheet">
    <link rel="stylesheet" href="css/videoplay.css">
  </head>
  <!-- This is for jquery style -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script>
  // Toggling the written content from jQuery
  $(document).ready(function(){
  $("#head1").click(function(){
  $("#para1").slideToggle("slow");
  });
  });
  $(document).ready(function(){
  $("#head2").click(function(){
  $("#para2").slideToggle("slow");
  });
  });
  $(document).ready(function(){
  $("#head3").click(function(){
  $("#para3").slideToggle("slow");
  });
  });
  </script>
  
  <body>
    <?php
    require("nav_bar.php");
    require("connection.php");
    $user_id=$_SESSION['id'];
    ?>
    <header>
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
      </video>
    </header>
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/photo.jpg" class="d-block w-100">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>E-Commerce.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/photo1.jpg" class="d-block w-100" alt="...">
            <div class="container">
              <div class="carousel-caption">
                <h1>Join us for more!</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/photo2.jpg" class="d-block w-100" alt="...">
            
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Best quality products al over world</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="viewallproduct.php" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img src="images/1.jpg" width="140" height="140" background="#777" color="#777" class="rounded-circle">
            <h2 id="head1">Click Me!</h2>
            <p id="para1">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img src="images/2.jpg" width="140" height="140" background="#777" color="#777" class="rounded-circle">
              <h2 id="head2">Click Me!</h2>
              <p id="para2">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img src="images/fashion3.jpg" width="140" height="140" background="#777" color="#777" class="rounded-circle">
                <h2 id="head3">Click Me!</h2>
                <p id="para3">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <!-- START THE FEATURETTES -->
                <hr class="featurette-divider">
                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Programming is fun: Using Programming, you can create your own games, your personal blog/profile page, a social networking site like Facebook, a search engine like Google or an e-commerce platform like Amazon! Won’t that be fun? Imagine creating your own game and putting it on Play Store and getting thousands and thousands of downloads!Your startup business is struggling to grow? Write a story what caused your business to go down, or not growing to the next level. Express on your words. While, we try to understand, or maybe we help you grow! </p>
                  </div>
                  <div class="col-md-5">
                    <img src="images/2.jpg" width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto">
                  </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">  <p class="lead"><address>
                      <strong>Our location</strong>
                      <br>Dhobighat, Lalitpur (0.01 mi)
                      <br>Lalitpur, Nepal 44600
                      <br>
                      <p>Contact: (+977)9823573261
                      </p>
                      <br>
                      <p> Email: <a href="https://www.alpastechnology.com/">hr@alpastechnology.com</a> <br>
                    </p> <br>
                    <a href="https://www.google.it/maps/place/Dhobighat,+Patan+44600/@27.6723003,85.3003389,18.11z/data=!4m5!3m4!1s0x39eb183a241f8131:0x99801b681879417!8m2!3d27.677003!4d85.3019883?hl=en">Get Directions</a>
                  </address></p></p>
                </div>
                <div class="col-md-5 order-md-1">
                  <img src="images/1.jpg" width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto">
                </div>
              </div>
              <hr class="featurette-divider">
              <div class="row featurette">
                
                <div class="col-md-12">
                  <h3> Features Products!!</h3>
                  <div class="row">
                    <?php
                    $sql = "SELECT * FROM product
                    WHERE user_id!=$user_id
                    ORDER by id desc limit 3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($data = $result->fetch_assoc())
                    {
                    ?>
                    <div class="col-md-4 mb-5">
                      <div class="card h-100">
                        <img class="card-img-top" src="uploads/<?php echo $data['file']; ?>">
                        <div class="card-body">
                          <h4 class="card-title">
                          <?php echo $data["title"];   ?>
                          </h4>
                          <div class="card-footer text-center">
                            <form action="viewitem.php?id=<?php echo $data['id']; ?>" method="POST">
                              <input type="hidden" name="view_btn">
                              <button class="btn btn-primary" type="submit">View</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                    }
                    ?>
                  </div>
                  
                </div>
                <?php
                require("footer.php");
                ?>
              </div>
              <hr class="featurette-divider">
              <!-- /END THE FEATURETTES -->
              </div><!-- /.container -->
              
            </main>
            <script src="jquery/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            
          </body>
        </html>