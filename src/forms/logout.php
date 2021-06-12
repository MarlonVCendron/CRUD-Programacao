<?php

session_start();

if(isset($_POST["logout"])){
  unset($_SESSION["email"]);
  $_SESSION["info"] = "Você deslogou com sucesso.";
  header("Location: http://$_SERVER[HTTP_HOST]/");
}

?>