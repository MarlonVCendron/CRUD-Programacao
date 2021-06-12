<?php

namespace App\dao;
use App\utils\Database;
use App\entities\Product;

class ProductDAO{
  public function add(Product $product){
    $db = Database::getConnection();

    $stmt = $db->prepare("INSERT INTO products (name, price, stock, provider, shelf) values (:name, :price, :stock, :provider, :shelf)");

    $stmt->execute(array(
      ':name' => $product->getName(),
      ':price' => $product->getPrice(),
      ':stock' => $product->getStock(),
      ':provider' => $product->getProvider(),
      ':shelf' => $product->getShelf()
    ));

    return $stmt->rowCount();
  }
 
  public function edit(Product $product){
    $db = Database::getConnection();

    $stmt = $db->prepare("UPDATE products SET name=:name, price=:price, stock=:stock, provider:provider, shelf:shelf) WHERE id=:id");

    $stmt->execute(array(
      ':name' => $product->getName(),
      ':price' => $product->getPrice(),
      ':stock' => $product->getStock(),
      ':provider' => $product->getProvider(),
      ':shelf' => $product->getShelf(),
      ':id' => $product->getId()
    ));

    return $stmt->rowCount();
  }

  public function delete($id){
    $db = Database::getConnection();

    $stmt = $db->prepare("DELETE FROM products WHERE id=:id");

    $stmt->execute(array(
      ':id' => $id
    ));

    return $stmt->rowCount();
  }

  public function getAll() {
    $db = Database::getConnection();
    
    $stmt = $db->prepare("SELECT * FROM products");

    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
  }
}
?>