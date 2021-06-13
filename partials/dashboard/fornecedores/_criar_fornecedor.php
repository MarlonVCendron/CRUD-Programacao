<?php require_once(__DIR__."/../_navbar.php") ?>
<?php require_once(__DIR__."/_campos_form_fornecedor.php") ?>

<div class="container mt-4">
  <form method="POST" action="../../../src/forms/fornecedores/criar.php">
    <legend>Criar fornecedor</legend>

    <?php formFornecedor() ?>

    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2">
          Criar
        </button>
        <a href="/dashboard" class="btn btn-secondary mt-2">
          Voltar
        </a>
      </div>
    </div>
  </form>
</div>