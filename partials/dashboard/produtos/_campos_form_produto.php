<?php
require __DIR__ . '/../../../vendor/autoload.php';
use App\dao\ProviderDAO;

$providerDao = new ProviderDAO;
$fornecedores = $providerDao->getAll();
?>

<?php $formProduto = function($nome="", $preco="", $estoque="", $nomeFornecedor="", $estante="") use ($fornecedores) {?>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="<?=$nome?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="number" name="preco" id="preco" class="form-control" value="<?=$preco?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="estoque">Estoque</label>
      <input type="number" name="estoque" id="estoque" class="form-control" value="<?=$estoque?>" required />
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="fornecedor">Fornecedor</label>

      <select class="form-select" name="fornecedor" id="fornecedor" required>
        <option value=""></option>
        <?php foreach ($fornecedores as $fornecedor) { ?>
          <option
            value="<?=$fornecedor["id"]?>"
            <?php echo ($fornecedor["name"] == $nomeFornecedor ? "selected" : "");?>>
              <?=$fornecedor["name"]?>
          </option>
        <?php } ?>
      </select>
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