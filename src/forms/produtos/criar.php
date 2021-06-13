<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\entities\Product;
use App\dao\ProductDAO;
use App\utils\FlashMessage;
session_start();

$productDao = new ProductDAO;

$nome = $_REQUEST["nome"] ?? null;
$preco = $_REQUEST["preco"] ?? null;
$estoque = $_REQUEST["estoque"] ?? null;
$fornecedor = $_REQUEST["fornecedor"] ?? null;
$estante = $_REQUEST["estante"] ?? null;

$product = new Product(null, $nome, $preco, $estoque, $fornecedor, $estante);

$retorno = $productDao->add($product);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Produto adicionado com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard/listar");

?>