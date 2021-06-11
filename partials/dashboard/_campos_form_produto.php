<?php function formProduto($nome="", $preco="", $estoque="", $fornecedor="", $estante=""){ ?>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="<?=$nome?>" />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="number" name="preco" id="preco" class="form-control" value="<?=$preco?>" />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="estoque">Estoque</label>
      <input type="number" name="estoque" id="estoque" class="form-control" value="<?=$estoque?>" />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="fornecedor">Fornecedor</label>
      <input type="text" name="fornecedor" id="fornecedor" class="form-control" value="<?=$fornecedor?>" />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="estante">Estante</label>
      <input type="text" name="estante" id="estante" class="form-control" value="<?=$estante?>" />
    </div>
  </div>
</div>
<?php } ?>