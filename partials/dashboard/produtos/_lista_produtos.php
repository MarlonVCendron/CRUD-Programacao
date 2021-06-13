<?php
require __DIR__ . '/../../../vendor/autoload.php';
require_once(__DIR__."/../_navbar.php");
require_once(__DIR__."/_modal_excluir.php");
use App\dao\ProductDAO;

$productDao = new ProductDAO;
$produtos = $productDao->getAll();
?>

<div class="container mt-4">

  <table class="table">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Estoque</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Estante</th>
      <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($produtos as $produto) { ?>
      <tr>
        <th scope="row"><?= $produto["id"] ?></th>
        <td><?= $produto["name"]?></td>
        <td><?= $produto["price"]?></td>
        <td><?= $produto["stock"]?></td>
        <td><?= $produto["provider"]?></td>
        <td><?= $produto["shelf"]?></td>
        <td>
          <?php modalExcluir($produto["id"], $produto["name"]); ?>

          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir<?=$produto["id"]?>">
            Excluir
          </button>
          <a href="http://<?=$_SERVER['HTTP_HOST']?>/dashboard/editar?id=<?=$produto["id"]?>" class="btn btn-info">
            Editar
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <div class="row">
    <div class="col">
      <a href="/dashboard" class="btn btn-secondary mt-2">Voltar</a>
    </div>
  </div>
</div>