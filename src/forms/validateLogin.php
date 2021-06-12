<?php 

require __DIR__ . '/../../vendor/autoload.php';

use App\entities\User;
use App\utils\FlashMessage;

session_start(); 

$email = $_REQUEST["email"] ?? null;
$password = $_REQUEST["password"] ?? null;

$user = new User($email, $password);

if($user->validate()){
  $_SESSION["email"] = $email;
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Login efetuado com sucesso");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Email ou senha incorretos");
}

header("Location: http://$_SERVER[HTTP_HOST]/");
?>