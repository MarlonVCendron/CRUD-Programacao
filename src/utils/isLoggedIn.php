<?php session_start(); ?>

<?php
  function isLoggedIn(){
    return isset($_SESSION["email"]); 
  }
?>