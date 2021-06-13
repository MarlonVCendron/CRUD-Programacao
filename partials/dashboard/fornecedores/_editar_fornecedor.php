<?php
require_once(__DIR__."/../_navbar.php");
require_once(__DIR__."/_campos_form_fornecedor.php");
use App\dao\ProviderDAO;

$id = $_GET['id'];

$providerDao = new ProviderDAO;
$fornecedor = $providerDao->getById($id);
?>

<div class="container mt-4">
  <form method="POST" action="../../src/forms/fornecedores/editar.php">
    <legend>Editar fornecedor de ID <?=$id?></legend>

    <?php formFornecedor($fornecedor["name"], $fornecedor["price"], $fornecedor["stock"], $fornecedor["provider"], $fornecedor["shelf"]) ?>

    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2" name="id" value="<?=$id?>">
          Editar
        </button>
        <a href="/dashboard/listar_fornecedor" class="btn btn-secondary mt-2">
          Voltar
        </a>
      </div>
    </div>
  </form>
</div>