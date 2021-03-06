<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
switch ($url) {
  case "":
  case "/":
  case "/index.php":
    $page = "partials/_home.php";
    $title = "Login";
    $restricted = false;
    break;
  case "/dashboard":
  case "/dashboard.php":
    $page = "partials/dashboard/_dashboard.php";
    $title = "Dashboard";
    $restricted = true;
    break;
  // PRODUTO
  case "/dashboard/criar_produto":
  case "/dashboard/criar_produto.php":
    $page = "partials/dashboard/produtos/_criar_produto.php";
    $title = "Criar Produto";
    $restricted = true;
    break;
  case "/dashboard/listar_produto":
  case "/dashboard/listar_produto.php":
    $page = "partials/dashboard/produtos/_lista_produtos.php";
    $title = "Lista de Produtos";
    $restricted = true;
    break;
  case "/dashboard/editar_produto":
  case "/dashboard/editar_produto.php":
    $page = "partials/dashboard/produtos/_editar_produto.php";
    $title = "Editar Produto";
    $restricted = true;
    break;
  // FORNECEDOR
  case "/dashboard/criar_fornecedor":
  case "/dashboard/criar_fornecedor.php":
    $page = "partials/dashboard/fornecedores/_criar_fornecedor.php";
    $title = "Criar Fornecedor";
    $restricted = true;
    break;
  case "/dashboard/listar_fornecedor":
  case "/dashboard/listar_fornecedor.php":
    $page = "partials/dashboard/fornecedores/_lista_fornecedores.php";
    $title = "Lista de Fornecedores";
    $restricted = true;
    break;
  case "/dashboard/editar_fornecedor":
  case "/dashboard/editar_fornecedor.php":
    $page = "partials/dashboard/fornecedores/_editar_fornecedor.php";
    $title = "Editar Fornecedor";
    $restricted = true;
    break;
  // USUÁRIO
  case "/dashboard/registrar":
  case "/dashboard/registrar.php":
    $page = "partials/dashboard/usuários/_registrar.php";
    $title = "Registrar usuário";
    $restricted = true;
    break;
  default:
    $page = "partials/_404.php";
    $title = "Erro 404";
    $restricted = false;
    break;
}
