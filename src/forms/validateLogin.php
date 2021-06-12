<?php 

require __DIR__ . '/../../vendor/autoload.php';

use App\entities\User;

session_start(); 

$email = $_REQUEST["email"] ?? null;
$password = $_REQUEST["password"] ?? null;

$user = new User($email, $password);

if($user->validate()){
  $_SESSION["email"] = $email;
  $_SESSION["info"] = "Login efetuado com sucesso";
}else{
  $_SESSION["error"] = "Email ou senha incorretos";
}

header("Location: http://$_SERVER[HTTP_HOST]/");
?>