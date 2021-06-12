<?php

use App\utils\Utils;

if (Utils::isLoggedIn()) {
  header("Location: http://$_SERVER[HTTP_HOST]/dashboard");
}
?>

<div class="container">
  <h1 class="mt-3 text-center">Home</h1>

  <?php require_once(__DIR__."/_login.php"); ?>
</div>