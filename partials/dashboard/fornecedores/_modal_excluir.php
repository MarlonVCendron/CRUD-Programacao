<?php function modalExcluir($idFornecedor, $nomeFornecedor){ ?>
  <div class="modal fade" id="modalExcluir<?=$idFornecedor?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseja realmente excluir o fornecedor <span class="text-danger"><?=$nomeFornecedor?></span>?
        </div>
        <div class="modal-footer">
          <form method="POST" action="../../../src/forms/fornecedores/excluir.php">
            <button type="submit" class="btn btn-danger" name="id" value="<?=$idFornecedor?>" >
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