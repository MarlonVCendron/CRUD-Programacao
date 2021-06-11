<?php require_once(__DIR__."/_navbar.php") ?>
<?php require_once(__DIR__."/_campos_form_produto.php") ?>
<?php
$id = $_GET['id'];

//
// Pegar os dados do banco 
//

$nome="teste";
$preco="2";
$estoque="3";
$fornecedor="teste";
$estante="teste";
?>

<div class="container mt-4">
  <form method="POST" action="">
    <legend>Editar produto de ID <?=$id?></legend>

    <?php formProduto($nome, $preco, $estoque, $fornecedor, $estante) ?>

    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2">Editar</button>
        <a href="/dashboard/listar" class="btn btn-secondary mt-2">Voltar</a>
      </div>
    </div>
  </form>
</div>