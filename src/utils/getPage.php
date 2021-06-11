<?php
switch ($_SERVER["REQUEST_URI"]) {
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
    $page = "partials/dashboard/_criar_produto.php";
    $title = "Criar Produto";
    $restricted = true;
    break;
  case "/dashboard/listar":
  case "/dashboard/listar.php":
    $page = "partials/dashboard/_lista_produtos.php";
    $title = "Lista de Produtos";
    $restricted = true;
    break;
  default:
    $page = "partials/_404.php";
    $title = "Erro 404";
    $restricted = false;
    break;
}
