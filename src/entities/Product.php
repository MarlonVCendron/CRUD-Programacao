<?php
class Product {
  private $id;
  private $name;
  private $price;
  private $stock;

  function __construct($id, $name, $price, $stock) {
    $this->setId($id);
    $this->setName($name);
    $this->setPrice($price);
    $this->setStock($stock);
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
}
?>