<?php

require_once(__DIR__."/../utils/Database.php");
require_once(__DIR__."/../entities/Product.php");

class ProductDAO {

    public function add(Product $product) {
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
}