

<div class="modal fade" id="MPelicula" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius:30px; color:white;background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 98%, #FFCC70 100%);">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PELICULAS REGISTRADAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
      <?php
          $conexion = mysqli_connect('localhost','root','','recuperacion');

          $sqlM = 'SELECT * FROM pelicula';
          $query = mysqli_query($conexion,$sqlM);
          while($mostrar = mysqli_fetch_array($query)){
?>
<tr>
    <form>
    <th scope="row"><?php echo $mostrar['pelicula_id'] ?></th>
    <input type="hidden" value="<?php echo $mostrar['pelicula_id'] ?>"  id="pelicula_id" name="pelicula_id">
    <td><?php echo $mostrar['titulo'] ?></td>
    <td><?php echo $mostrar['director'] ?></td>
    <td><?php echo $mostrar['anio'] ?></td>
    <td><?php echo $mostrar['formato'] ?></td>
    <td><?php echo $mostrar['visionada'] ?></td>
    <td><?php echo $mostrar['genero_id'] ?></td>
    <br>
    <td><button  style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"  
                                    type="submit" class="btn btn-success" formaction="../RecuperacionPeliculas/controller/editarP.php" formmethod="POST">EDITAR</button>
    <td><button style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;" 
                                    class="btn btn-danger" type="submit" formaction="../RecuperacionPeliculas/model/eliminarP.php" formmethod="POST">ELIMINAR</button>
    </form>
</tr>

<?php
    }
?>


      </div>
    </div>
  </div>
</div>