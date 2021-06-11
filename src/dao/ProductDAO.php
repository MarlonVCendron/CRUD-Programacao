<?php

namespace App\dao;

use App\entities\Product;
use App\utils\Database;

class ProductDAO {

    public function add(Product $product) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("INSERT INTO products (email, password) values (:email, :password)");

        $stmt->execute(array(
            ':email' => $product->getNome(),
            ':password' => $product->getPassword()
        ));

        return $stmt->rowCount();
    }

    public function validate($email, $password) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("SELECT * FROM products WHERE email = :email");

        $stmt->execute(array(
            ':email' => $email
        ));

        $row = $stmt->fetch();

        if (password_verify($password, $row['password'])) {
            return true;
        } else {
            return false;
        }
    }
}