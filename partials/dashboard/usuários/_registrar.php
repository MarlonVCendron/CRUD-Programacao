<?php require_once(__DIR__."/../_navbar.php") ?>

<div class="container mt-4">
  <form method="POST" action="../../../src/forms/productOperations.php">
    <legend>Registrar</legend>


    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2" name="op" value="criar">
          Criar
        </button>
        <a href="/dashboard" class="btn btn-secondary mt-2">
          Voltar
        </a>
      </div>
    </div>
  </form>
</div>