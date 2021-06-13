<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\entities\Product;
use App\dao\ProductDAO;
use App\utils\FlashMessage;

$productDao = new ProductDAO;

$op = $_REQUEST["op"] ?? null;
$id = $_REQUEST["id"] ?? null;
$nome = $_REQUEST["nome"] ?? null;
$preco = $_REQUEST["preco"] ?? null;
$estoque = $_REQUEST["estoque"] ?? null;
$fornecedor = $_REQUEST["fornecedor"] ?? null;
$estante = $_REQUEST["estante"] ?? null;

$product = new Product($id, $nome, $preco, $estoque, $fornecedor, $estante);

if($op == "criar"){
  
  try{
    $productDao->add($product);
  } catch (Exception $e) {
    FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
  }

}else if($op == "editar"){

  try{
    $productDao->edit($product);
  } catch (Exception $e) {
    FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
  }

}else if($op == "excluir"){

  try{
    $productDao->delete($id);
    FlashMessage::setMessage(FlashMessage::SUCCESS, "Produto excluído com sucesso!");
  } catch (Exception $e) {
    FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
  }

}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/");

?>