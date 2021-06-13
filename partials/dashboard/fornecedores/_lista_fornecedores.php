<?php
require __DIR__ . '/../../../vendor/autoload.php';
require_once(__DIR__."/../_navbar.php");
require_once(__DIR__."/_modal_excluir.php");
use App\dao\ProviderDAO;

$providerDao = new ProviderDAO;
$fornecedores = $providerDao->getAll();
?>

<div class="container mt-4">
  <table class="table">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Endereço</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($fornecedores as $fornecedor) { ?>
      <tr>
        <th scope="row"><?= $fornecedor["id"] ?></th>
        <td><?= $fornecedor["name"]?></td>
        <td><?= $fornecedor["cnpj"]?></td>
        <td><?= $fornecedor["address"]?></td>
        <td><?= $fornecedor["city"]?></td>
        <td><?= $fornecedor["state"]?></td>
        <td>
          <?php modalExcluir($fornecedor["id"], $fornecedor["name"]); ?>

          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir<?=$fornecedor["id"]?>">
            Excluir
          </button>
          <a href="http://<?=$_SERVER['HTTP_HOST']?>/dashboard/editar_fornecedor?id=<?=$fornecedor["id"]?>" class="btn btn-info">
            Editar
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <div class="d-flex">
    <a href="/dashboard" class="btn btn-secondary mt-2">
      Voltar
    </a>
    <a href="/dashboard/criar_fornecedor" class="btn btn-outline-success mt-2 ms-2">
      Criar fornecedor
    </a>
  </div>
</div>