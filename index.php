<?php
session_start(); 
require_once(__DIR__."/src/utils/getPage.php");
require_once(__DIR__."/src/utils/manageRestriction.php");
require __DIR__ . '/vendor/autoload.php';
?>

<?php phpinfo() ?>


<!DOCTYPE html>
<html>

  <?php require_once(__DIR__."/partials/_head.php"); ?>

  <body>

    <?php
      require_once(__DIR__."/partials/_flash_messages.php");
      require_once($page);
    ?>

  </body>
</html>