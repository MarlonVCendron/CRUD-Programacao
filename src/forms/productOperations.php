<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Product;
use App\dao\ProductDAO;

$productDao = new ProductDAO;

$op = $_REQUEST["op"] ?? null;
$id = $_REQUEST["id"] ?? null;

if($op == "criar" || $op == "editar"){
  $nome = $_REQUEST["nome"] ?? null;
  $preco = $_REQUEST["preco"] ?? null;
  $estoque = $_REQUEST["estoque"] ?? null;
  $fornecedor = $_REQUEST["fornecedor"] ?? null;
  $estante = $_REQUEST["estante"] ?? null;

  $product = new Product($id, $nome, $preco, $estoque, $fornecedor, $estante);

  if ($op == "criar") {
    $productDao->add($product);
  }else{
    $productDao->edit($product);
  }
}else if($op == "excluir"){
  $productDao->delete($id);
}else{
  echo "erro";
}

header("Location: http://$_SERVER[HTTP_HOST]/");

?>