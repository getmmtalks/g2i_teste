<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar veículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form>
        <div class="form-group">
        <select id="inputState" class="form-control">
            <option selected disabled>Selecione a marca</option>
            <option></option>
        </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Título">
        </div>
        
        <div class="form-group">
        <input type="number" min="1900" placeholder="Ano" class="form-control" id="inputCity">
        </div>

        <div class="custom-file">
        <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
        
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>


<section>

<div class="row"  style="min-height:100vh;">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="text-center">

            <h1>g2iCar</h1>
            <p>Gestão inteligente da frota de veículos</p>
            <form>
                Busca por:<br />
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Título">
                </div>
                <div class="form-group">
                <select id="inputState" class="form-control">
                    <option selected disabled>Marca</option>
                    <option></option>
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