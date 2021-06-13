<?php
require_once(__DIR__."/../_navbar.php");
require_once(__DIR__."/_campos_form_produto.php");
use App\dao\ProductDAO;

$id = $_GET['id'];

$productDao = new ProductDAO;
$produto = $productDao->getById($id);
?>

<div class="container mt-4">
  <form method="POST" action="../../src/forms/productOperations.php">
    <legend>Editar produto de ID <?=$id?></legend>

    <?php formProduto($produto["name"], $produto["price"], $produto["stock"], $produto["provider"], $produto["shelf"]) ?>
    <input type="hidden" name="id" value="<?=$id?>" />

    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2" name="op" value="editar">
          Editar
        </button>
        <a href="/dashboard/listar" class="btn btn-secondary mt-2">
          Voltar
        </a>
      </div>
    </div>
  </form>
</div>