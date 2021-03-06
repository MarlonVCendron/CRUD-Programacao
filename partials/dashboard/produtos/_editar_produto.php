<?php
require_once(__DIR__."/../_navbar.php");
require_once(__DIR__."/_campos_form_produto.php");
use App\dao\ProductDAO;
use App\dao\ProviderDAO;

$id = $_GET['id'];

$productDao = new ProductDAO;
$providerDao = new ProviderDAO;

$produto = $productDao->getById($id);
$nomeFornecedor = $providerDao->getById($produto["provider"])["name"];
?>

<div class="container mt-4">
  <form method="POST" action="../../src/forms/produtos/editar.php">
    <legend>Editar produto de ID <?=$id?></legend>

    <?php $formProduto($produto["name"], $produto["price"], $produto["stock"], $nomeFornecedor, $produto["shelf"]) ?>

    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2" name="id" value="<?=$id?>">
          Editar
        </button>
        <a href="/dashboard/listar_produto" class="btn btn-secondary mt-2">
          Voltar
        </a>
      </div>
    </div>
  </form>
</div>