<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar veículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="modal-add-veiculo">
        <?=$this->Form->create();?>
      <div class="modal-body">
        
        
        <div class="form-group">
        <select class="form-control selectMarca" required id="inputMarca" name="inputMarca">
            <option selected disabled>Selecione a marca</option>
        </select>
        </div>
        <br />

        <div class="form-group">
            <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="inputNome" required>
        </div>
        <br />

        <div class="form-group">
          <input type="number" min="1900" placeholder="Ano" class="form-control" id="inputAno" name="inputAno" required>
        </div>

        
        
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<section>

<div class="row"  style="min-height:100vh;">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="text-center">

            <h1>g2iCar</h1>
            <p>Catálogo inteligente das linhas de veículos por marca</p>
            <form>
                Busca por:<br />
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
                </div>
                <div class="form-group">
                <select class="form-control selectMarca">
                    <option selected disabled>Marca</option>
                </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</section>