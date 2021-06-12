<?php

namespace App\entities;

class User {
  private $email;
  private $password;

  private $salt = "btVBpuW!zVt!gbd3$9^BF&kZ&9xvAYZU#YRoXgr7oubwMGrB";
  private $admin_email = "admin@admin.com";
  private $admin_password = "621a1955f6f108d7f5a83e822fb3b933bdfd65d594d6b997afb9dd3ed884245f"; //123456

  function __construct($email, $password) {
    $this->setEmail($email);
    $this->setPassword($password);
  }

  public function getEmail(){
    return $this->email;
  }
  
  public function setEmail($email){
    $this->email = $email;
  }

  public function getPassword(){
    return $this->password;
  }
  
  public function setPassword($password){
    $this->password = hash("sha256", $this->salt . $password, false);
  }

  public function validate() {
    return $this->email == $this->admin_email && $this->password == $this->admin_password;
  }
}
