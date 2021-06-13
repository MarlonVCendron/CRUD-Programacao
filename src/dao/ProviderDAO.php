<?php

namespace App\dao;
use App\utils\Database;
use App\entities\Provider;

class ProviderDAO{
  public function add(Provider $provider){
    $db = Database::getConnection();

    $stmt = $db->prepare("INSERT INTO providers (name, cnpj, address, city, state) values (:name, :cnpj, :address, :city, :state)");

    $stmt->execute(array(
      ':name' => $provider->getName(),
      ':cnpj' => $provider->getCnpj(),
      ':address' => $provider->getAddress(),
      ':city' => $provider->getCity(),
      ':state' => $provider->getState()
    ));

    return $stmt->rowCount();
  }
 
  public function edit(Provider $provider){
    $db = Database::getConnection();

    $stmt = $db->prepare("UPDATE providers SET name=:name, cnpj=:cnpj, address=:address, city=:city, state=:state WHERE id=:id");

    $stmt->execute(array(
      ':name' => $provider->getName(),
      ':cnpj' => $provider->getCnpj(),
      ':address' => $provider->getAddress(),
      ':city' => $provider->getCity(),
      ':state' => $provider->getState(),
      ':id' => $provider->getId()
    ));

    return $stmt->rowCount();
  }

  public function delete($id){
    $db = Database::getConnection();

    $stmt = $db->prepare("DELETE FROM providers WHERE id=:id");

    $stmt->execute(array(
      ':id' => $id
    ));

    return $stmt->rowCount();
  }

  public function getAll() {
    $db = Database::getConnection();
    
    $stmt = $db->prepare("SELECT * FROM providers");

    $stmt->execute();
    
    $result = [];
    while ($row = $stmt->fetch()) {
      array_push($result, $row);
    }

    return $result;
  }

  public function getById($id) {
    $db = Database::getConnection();
    
    $stmt = $db->prepare("SELECT * FROM providers WHERE id=:id");

    $stmt->execute(array(
      ':id' => $id
    ));
    
    $row = $stmt->fetch();

    return $row;
  }
}
?>