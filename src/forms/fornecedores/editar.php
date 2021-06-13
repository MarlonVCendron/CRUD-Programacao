<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\entities\Provider;
use App\dao\ProviderDAO;
use App\utils\FlashMessage;
session_start();

$providerDao = new ProviderDAO;

$id = $_REQUEST["id"] ?? null;
$nome = $_REQUEST["nome"] ?? null;
$cnpj = $_REQUEST["cnpj"] ?? null;
$endereco = $_REQUEST["endereco"] ?? null;
$cidade = $_REQUEST["cidade"] ?? null;
$estado = $_REQUEST["estado"] ?? null;

$provider = new Provider($id, $nome, $cnpj, $endereco, $cidade, $estado);

$retorno = $providerDao->edit($provider);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Fornecedor editado com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard/listar_fornecedor");

?>