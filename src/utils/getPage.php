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
  case "/dashboard/criar":
  case "/dashboard/criar.php":
    $page = "partials/dashboard/produtos/_criar_produto.php";
    $title = "Criar Produto";
    $restricted = true;
    break;
  case "/dashboard/listar":
  case "/dashboard/listar.php":
    $page = "partials/dashboard/produtos/_lista_produtos.php";
    $title = "Lista de Produtos";
    $restricted = true;
    break;
  case "/dashboard/editar":
  case "/dashboard/editar.php":
    $page = "partials/dashboard/produtos/_editar_produto.php";
    $title = "Editar Produto";
    $restricted = true;
    break;
  default:
    $page = "partials/_404.php";
    $title = "Erro 404";
    $restricted = false;
    break;
}
