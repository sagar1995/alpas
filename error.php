<?php
      if(!empty($_SESSION['error'])) {
      $errorMessage = $_SESSION['error'];
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $errorMessage; unset($_SESSION["error"]); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php } ?>