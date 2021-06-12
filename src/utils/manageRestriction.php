<?php

namespace App\utils;
use App\utils\Utils;

if ($restricted) {
  if (!Utils::isLoggedIn()) {
    http_response_code(404);
    $_SESSION["error"] = "Você não tem acesso a essa página.";
    header("Location: http://$_SERVER[HTTP_HOST]/");
  }
}
?>
