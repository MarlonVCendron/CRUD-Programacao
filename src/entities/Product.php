<?php

class Product {
  private $id;
  private $name;
  private $price;
  private $stock;
  private $provider;
  private $shelf;

  function __construct($id, $name, $price, $stock, $provider, $shelf) {
    $this->setId($id);
    $this->setName($name);
    $this->setPrice($price);
    $this->setStock($stock);
    $this->setProvider($provider);
    $this->setShelf($shelf);
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

  public function getPrice(){
    return $this->price;
  }
  public function setPrice($price){
    $this->price = $price;
  }

  public function getStock(){
    return $this->stock;
  }
  public function setStock($stock){
    $this->stock = $stock;
  }

  public function getProvider(){
    return $this->provider;
  }
  public function setProvider($provider){
    $this->provider = $provider;
  }

  public function getShelf(){
    return $this->shelf;
  }
  public function setShelf($shelf){
    $this->shelf = $shelf;
  }
}
?>