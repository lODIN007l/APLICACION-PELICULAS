
<div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" class="modal-content" style="border-radius:30px; color:white;background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 98%, #FFCC70 100%);">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INGRESO DE DATOS DE GENERO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="model/insertar.PHP" method="POST">
        <label for="" class="col-form-label" >Nombre Del Genero</label>
        <input type="text"  maxlength="150" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
       
      </div>
      <div class="modal-footer">
        <button style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"  type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"  type="submit" class="btn btn-success">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>