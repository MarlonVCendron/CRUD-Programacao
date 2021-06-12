<?php require_once(__DIR__."/../_navbar.php") ?>
<?php require_once(__DIR__."/_modal_excluir.php") ?>
<?php require_once(__DIR__."/../../../src/entities/Product.php") ?>

<?php
  $produtos = [
    new Product(1, "Arroz", 5, 312, "312", "312"),
    new Product(2, "Coiso", 12, "21", "312", "312"),
    new Product(3, "Outro coiso", 7, "123", "312", "312")
  ];
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
        <th scope="row"><?= $produto->getId() ?></th>
        <td><?= $produto->getName() ?></td>
        <td><?= $produto->getPrice() ?></td>
        <td><?= $produto->getStock() ?></td>
        <td><?= $produto->getProvider() ?></td>
        <td><?= $produto->getShelf() ?></td>
        <td>
          <?php modalExcluir($produto->getId(), $produto->getName()); ?>

          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir<?=$produto->getId()?>">
            Excluir
          </button>
          <a href="http://<?=$_SERVER['HTTP_HOST']?>/dashboard/editar?id=<?=$produto->getId()?>" class="btn btn-info">
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