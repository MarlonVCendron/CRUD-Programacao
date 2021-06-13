<?php

namespace App\utils;

class FlashMessage {
  
  public const INFO = 'info';
  public const ERROR = 'danger'; 
  public const WARNING = 'warning';
  public const SUCCESS = 'success';

  public static function setMessage($type, $message) {
    $_SESSION[$type] = $message;
  }

  public static function getMessage($type) {
    $message = $_SESSION[$type] ?? null;
    unset($_SESSION[$type]);

    if ($message) {
      return "<div class='alert alert-{$type}'>{$message}</div>";
    } else {
      return;
    }
  }
}