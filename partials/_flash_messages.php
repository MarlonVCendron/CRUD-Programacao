<?php 
  $info = $_SESSION["info"] ?? null;
  unset($_SESSION["info"]);

  $error = $_SESSION["error"] ?? null;
  unset($_SESSION["error"]);
?>

<?php if ($info): ?>
  <div class="alert alert-success">
    <?php echo $info; ?>
  </div>
<?php endif ?>

<?php if ($error): ?>
  <div class="alert alert-danger">
    <?php echo $error; ?>
  </div>
<?php endif ?>