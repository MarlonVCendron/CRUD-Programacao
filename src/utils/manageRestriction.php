<?php
  if ($restricted) {
    require_once(__DIR__."/isLoggedIn.php");
    if (!isLoggedIn()) {
      http_response_code(404);
      $_SESSION["error"] = "Você não tem acesso a essa página.";
      header("Location: http://$_SERVER[HTTP_HOST]/");
    }
  }
?>
