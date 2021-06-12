<?php

namespace App\utils;
use App\utils\Utils;
use App\utils\FlashMessage;

if ($restricted) {
  if (!Utils::isLoggedIn()) {
    http_response_code(404);
    FlashMessage::setMessage(FlashMessage::ERROR, "Você não tem acesso a essa página.");
    header("Location: http://$_SERVER[HTTP_HOST]/");
  }
}
?>
