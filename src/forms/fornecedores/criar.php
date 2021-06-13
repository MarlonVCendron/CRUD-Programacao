<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\entities\Provider;
use App\dao\ProviderDAO;
use App\utils\FlashMessage;
session_start();

$providerDao = new ProviderDAO;

$nome = $_REQUEST["nome"] ?? null;
$cnpj = $_REQUEST["cnpj"] ?? null;
$endereco = $_REQUEST["endereco"] ?? null;
$cidade = $_REQUEST["cidade"] ?? null;
$estado = $_REQUEST["estado"] ?? null;

$provider = new Provider(null, $nome, $cnpj, $endereco, $cidade, $estado);

$retorno = $providerDao->add($provider);

if($retorno){
  FlashMessage::setMessage(FlashMessage::SUCCESS, "Fornecedor adicionado com sucesso!");
}else{
  FlashMessage::setMessage(FlashMessage::ERROR, "Ocorreu um erro!");
}

header("Location: http://$_SERVER[HTTP_HOST]/dashboard/listar_fornecedor");

?>