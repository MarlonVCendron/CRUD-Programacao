<?php

namespace App\utils;

class Utils {
  public static function isLoggedIn() {
    return isset($_SESSION["email"]); 
  }

  public static function logout() {
    if(isset($_POST["logout"])){
      unset($_SESSION["email"]);
      $_SESSION["info"] = "Você deslogou com sucesso.";
      header("Location: http://$_SERVER[HTTP_HOST]/");
    }
  }
}