<?php session_start(); ?>

<?php
  require_once("../entities/User.php");

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