<?php

namespace App\dao;

use App\entities\User;
use App\utils\Database;

class UserDAO {

    public function add(User $user) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("INSERT INTO users (email, password) values (:email, :password)");

        $stmt->execute(array(
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword()
        ));

        return $stmt->rowCount();
    }

    public function validate($email, $password) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");

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