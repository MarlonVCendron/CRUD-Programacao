<?php session_start(); ?>
<?php require_once(__DIR__."/src/utils/getPage.php"); ?>
<?php require_once(__DIR__."/src/utils/manageRestriction.php"); ?>

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