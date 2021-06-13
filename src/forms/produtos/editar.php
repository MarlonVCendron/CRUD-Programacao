<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\entities\Product;
use App\dao\ProductDAO;
use App\utils\FlashMessage;
session_start();

$productDao = new ProductDAO;

$id = $_REQUEST["id"] ?? null;
$nome = $_REQUEST["nome"] ?? null;
$preco = $_REQUEST["preco"] ?? null;
$estoque = $_REQUEST["estoque"] ?? null;
$fornecedor = $_REQUEST["fornecedor"] ?? null;
$estante = $_REQUEST["estante"] ?? null;

$product = new Product($id, $nome, $preco, $estoque, $fornecedor, $estante);

$retorno = $productDao->edit($product);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Produto editado com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard/listar");

?>