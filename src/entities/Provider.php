<?php

namespace App\entities;

class Provider {
  private $id;
  private $name;
  private $cnpj;
  private $address;
  private $city;
  private $state;

  function __construct($id, $name, $cnpj, $address, $city, $state) {
    $this->setId($id);
    $this->setName($name);
    $this->setCnpj($cnpj);
    $this->setAddress($address);
    $this->setCity($city);
    $this->setState($state);
  }

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }

  public function getName(){
    return $this->name;
  }
  public function setname($name){
    $this->name= $name;
  }

  public function getCnpj(){
    return $this->cnpj;
  }
  public function setCnpj($cnpj){
    $this->cnpj = $cnpj;
  }

  public function getAddress(){
    return $this->address;
  }
  public function setAddress($address){
    $this->address = $address;
  }

  public function getCity(){
    return $this->city;
  }
  public function setCity($city){
    $this->city = $city;
  }

  public function getState(){
    return $this->state;
  }
  public function setState($state){
    $this->state = $state;
  }
}
?>