<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container container-fluid">
    <a class="navbar-brand" href="/dashboard">Dashboard</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/dashboard/listar_produto" class="nav-link">
            Produtos
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/listar_fornecedor" class="nav-link">
            Fornecedores
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/registrar" class="nav-link">
            Registrar usuário
          </a>
        </li>
      </ul>

      <span class="navbar-text px-2">Usuário: <?= $_SESSION["email"]?></span>

      <div>
        <form action="../../src/forms/logout.php" method="POST">
          <input type="submit" name="logout" value="Sair" class="btn btn-danger" />
        </form>
      </div>
    </div>
  </div>
</nav>