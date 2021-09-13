
<div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="border-radius:30px; color:white;background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 98%, #FFCC70 100%);">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel">INGRESO DE DATOS DE PELICULA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="model/insert.PHP" method="POST">
        <label for="" class="col-form-label" >Titulo</label>
         <input type="text" class="form-control" maxlength="150" id="titulo" name="titulo" placeholder="titulo" required>
        <label for="" class="col-form-label" >Director</label>
         <input type="text" class="form-control" id="director" maxlength="150" name="director" placeholder="director" required>
        <label for="" class="col-form-label" >anio</label>
          <input type="number" class="form-control" maxlength="4" min="1895" max="2021" id="anio" name="anio" placeholder="anio" required>
        <label for="" class="col-form-label" >formato</label>
          <input type="text" class="form-control" id="formato" name="formato" placeholder="formato"  minlength="1" maxlength="5"  required>
        <label for="" class="col-form-label" >visionada</label>
          <input type="text" class="form-control" maxlength="150" id="visionada" name="visionada" placeholder="visionada" required>
        <br>
        <label for="" class="col-form-label" >genero_id</label>
        <select style=" color:white; background-color: #2095ea;
        background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"  for="" class="col-form-label" id="genero_id" name="genero_id" placeholder="genero_id" required> 
        <?php
                    include("../RecuperacionPeliculas/model/conexion.php");
                        $query = "SELECT * FROM genero";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                            ?>
                                 echo '<option value="<?php echo $row['genero_id'] ?>"><?php echo $row['nombre'] ?></option>';
                            
                            <?php
                        }
                        ?>
        </select>
      </div>
      <div class="modal-footer">
        <button  style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"  type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button  style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"  type="submit" class="btn btn-success">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>