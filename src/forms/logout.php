<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\utils\FlashMessage;

session_start();
if(isset($_POST["logout"])){
  unset($_SESSION["email"]);
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Você deslogou com sucesso.");
  header("Location: http://$_SERVER[HTTP_HOST]/");
}

?>