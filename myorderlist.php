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
    <!--     CSS Files           -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/myfrontend.css" rel="stylesheet">
  </head>
  <style>
  .custom-container {
  margin-top: 4rem! important;
  }
  
  </style>
  <body>
    <div class="container custom-container">
      <?php
      require("nav_bar.php");
      require("success.php");
      require("error.php");
      ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Your Order items are listed below: </h4>
                <p class="card-category"> You can cancel these item anytime you want!</p>
              </div>
              <div class="card-body">
                <?php
                require("connection.php");
                $sql = "SELECT o.id as o_id,p.id as p_id,p.title,p.file,o.total_price,p.quantity as p_quantity,o.quantity as o_quantity from user as u, order_detail as o, product as p WHERE u.id=o.user_id and o.product_id=p.id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                ?>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Product Name
                      </th>
                      <th>
                        Quantity
                      </th>
                      <th>
                        File
                      </th>
                      <th>
                        Total Price
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <?php
                      // output datas of each data
                      while($data = $result->fetch_assoc())
                      {
                      echo "<tr>";
                        
                        echo "<td>". $data["title"]."</td>";
                        
                        echo "<td>". $data["o_quantity"]."</td>";
                        echo "<td><img style='height:auto;width:auto;' src=uploads/". $data['file']."></td>";
                        echo "<td>". $data["total_price"]."</td>"; ?>
                        <td class='text-right'>
                          <form action="deletemyorder.php" method="POST">
                            <button type="submit" class="btn btn-danger">Cancel Request</button>
                            <input type="hidden" name="order_quantity" value="<?php echo $data['o_quantity']; ?>">
                            <input type="hidden" name="product_quantity" value="<?php echo $data['p_quantity']; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $data['p_id']; ?>">
                            <input type="hidden" name="order_id" value="<?php echo $data['o_id']; ?>">
                          </form>
                        </td>
                      </tr>
                      
                    </tbody>
                  <?php echo "</tr>";
                  }
                  } else
                  {
                  echo "You no item in the list";
                  }
                  
                  $conn->close();
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </<div>
    </div>
    <?php
    require("footer.php");?>
    <!--   Core JS Files   -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>