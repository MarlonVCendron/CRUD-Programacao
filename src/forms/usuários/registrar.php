<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\entities\User;
use App\dao\UserDAO;
use App\utils\FlashMessage;
session_start();

$userDao = new UserDAO;

$email = $_REQUEST["email"] ?? null;
$password = $_REQUEST["password"] ?? null;

$user = new User($email, $password);

$retorno = $userDao->add($user);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Usuário registrado com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard");

?>