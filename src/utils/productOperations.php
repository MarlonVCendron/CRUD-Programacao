<?php
  require_once(__DIR__."/../../src/entities/Product.php");

  $op = $_REQUEST["op"] ?? null;
  $id = $_REQUEST["id"] ?? null;

  if($op == "criar" || $op == "editar"){
    $nome = $_REQUEST["nome"] ?? null;
    $preco = $_REQUEST["preco"] ?? null;
    $estoque = $_REQUEST["estoque"] ?? null;
    $fornecedor = $_REQUEST["fornecedor"] ?? null;
    $estante = $_REQUEST["estante"] ?? null;

    new Product($id, $nome, $preco, $estoque, $fornecedor, $estante);

    if ($op == "criar") {
      // Criar
    }else{
      // Editar
    }
  }else if($op == "excluir"){
    // Excluir
  }else{
    echo "erro";
  }

  header("Location: http://$_SERVER[HTTP_HOST]/");

?>