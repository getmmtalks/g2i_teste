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
            <form id="form-buscar-veiculos">
              <?=$this->Form->create();?>
                Busca por:<br />
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" name="inputNome" placeholder="Nome">
                </div>
                <br />
                <div class="form-group">
                <select class="form-control selectMarca" name="inputMarca">
                    <option selected disabled>Marca</option>
                </select>
                <br />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</section>

<section>
    
       <div class="row" id="buscar-veiculos-resultado" style="display: none; padding: 12px;">
           
       </div>
    
</section>
