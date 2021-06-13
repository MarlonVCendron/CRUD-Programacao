<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\dao\ProductDAO;
use App\utils\FlashMessage;
session_start();

$id = $_REQUEST["id"] ?? null;
$productDao = new ProductDAO;

$retorno = $productDao->delete($id);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Produto excluído com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard/listar");

?>