<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\dao\ProviderDAO;
use App\utils\FlashMessage;
session_start();

$id = $_REQUEST["id"] ?? null;
$providerDao = new ProviderDAO;

$retorno = $providerDao->delete($id);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Fornecedor excluído com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard/listar_fornecedor");

?>