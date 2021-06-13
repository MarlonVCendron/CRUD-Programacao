<?php 

require __DIR__ . '/../../../vendor/autoload.php';

use App\dao\UserDAO;
use App\utils\FlashMessage;

session_start(); 

$email = $_REQUEST["email"] ?? null;
$password = $_REQUEST["password"] ?? null;

$userDao = new UserDAO;

if($userDao->validate($email, $password)){
  $_SESSION["email"] = $email;
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Login efetuado com sucesso");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Email ou senha incorretos");
}

header("Location: http://$_SERVER[HTTP_HOST]/");
?>