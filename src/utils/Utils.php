<?php

namespace App\utils;

class Utils {
  public static function isLoggedIn() {
    return isset($_SESSION["email"]); 
  }
}