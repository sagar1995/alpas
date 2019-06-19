<?php
if(!empty($_SESSION['success'])) {
  $successMessage = $_SESSION['success'];
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo $successMessage; unset($_SESSION["success"]); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>