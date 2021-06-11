<?php require_once(__DIR__."/_navbar.php") ?>

<div class="container mt-4">
  <form method="POST" action="">
    <legend>Criar produto</legend>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control" />
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="preco">Preço</label>
          <input type="number" name="preco" id="preco" class="form-control" />
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="estoque">Estoque</label>
          <input type="number" name="estoque" id="estoque" class="form-control" />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-primary mt-2">Criar</button>
        <a href="/dashboard" class="btn btn-secondary mt-2">Voltar</a>
      </div>
    </div>
  </form>
</div>