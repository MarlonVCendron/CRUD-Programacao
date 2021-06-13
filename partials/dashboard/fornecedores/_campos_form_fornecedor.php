<?php function formFornecedor($nome="", $cnpj="", $endereco="", $cidade="", $estado=""){ ?>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="<?=$nome?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="cnpj">CNPJ</label>
      <input type="text" name="cnpj" id="cnpj" class="form-control" value="<?=$cnpj?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" id="endereco" class="form-control" value="<?=$endereco?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" id="cidade" class="form-control" value="<?=$cidade?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="estado">Estado</label>
      <input type="text" name="estado" id="estado" class="form-control" value="<?=$estado?>" required />
    </div>
  </div>
</div>
<?php } ?>