<?php require_once(__DIR__."/../_navbar.php") ?>

<div class="container mt-4">
  <form method="POST" action="../../../src/forms/usuários/registrar.php">
    <legend>Registrar</legend>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" />
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" class="form-control" name="password" id="password" />
    </div>

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