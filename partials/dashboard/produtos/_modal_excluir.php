<?php function modalExcluir($idProduto, $nomeProduto){ ?>
  <div class="modal fade" id="modalExcluir<?=$idProduto?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseja realmente excluir o produto <span class="text-danger"><?=$nomeProduto?></span>?
        </div>
        <div class="modal-footer">
          <form method="POST" action="../../../src/forms/produtos/excluir.php">
            <button type="submit" class="btn btn-danger" name="id" value="<?=$idProduto?>" >
              Excluir
            </button>
          </form>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancelar
          </button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>