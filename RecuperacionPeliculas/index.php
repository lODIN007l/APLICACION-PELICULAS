    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplicaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../RecuperacionPeliculas/styles.css">
</head>
<body style ="background-color: #074166;
background-image: linear-gradient(27deg, #074166 0%, #9599E2 100%);
 ">
  <div class="contenidoPrincipal">
    <div class="barranavegacion">
        
        <nav>
            <ul >
                
                <li><a style="color:white;" href="#insert" data-toggle="modal" data-target="#insert">Ingresar Pelicula</a></li>
                <li><a style="color:white;" href="#insertar" data-toggle="modal" data-target="#insertar">Ingresar Genero</a></li>
                <li><a style="color:white;" href="#MPelicula" data-toggle="modal" data-target="#MPelicula"> Pelicula Registradas</a></li>
                <li><a style="color:white;" href="#MGenero" data-toggle="modal" data-target="#MGenero">Genero Registrados</a></li>
                <li>
               
                    <div class="dropdown">
                    <button style=" color:white; background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%); border-radius:20px;"    class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reportes
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="../RecuperacionPeliculas/view/ReporteP.php">Reporte de Peliculas</a>
                        <a class="dropdown-item" href="../RecuperacionPeliculas/view/ReporteG.php">Reporte de Generos</a>
                        <a class="dropdown-item" href="../RecuperacionPeliculas/view/ReporteL.php">Reporte Por titulo con "P"</a>
                        <a class="dropdown-item" href="../RecuperacionPeliculas/view/ReporteAnimacion.php">Reporte Por genero:Animacion</a>
                        
                    </div>
                </li>
</div>

            </ul>
        </nav>                   
    </div>
    <div class="contenidoGenero " >
        <h3 style="color:white;">Género</h3>
        <div class="conteidoEntrante" style="display: inline-flex; margin:10px">
        <?php
                    include("../RecuperacionPeliculas/model/conexion.php");
                    
                        $query = "SELECT * FROM genero";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                            ?>
                                <div id="generosIndivuduales" name="generosIndivuduales" style="display: inline-flex;
                                    color: white;
                                    background-color: #2095ea;
                                    background-image: linear-gradient(206deg, #2095ea 0%, #9599E2 100%);
                                    padding: .5rem;
                                    border-radius: 20px;
                                    font-size: 1rem; margin-left:10px;" >
                                   
                                        <h3 style="color:white; font-size:14px; margin-left:2px" ><?php echo $row['genero_id'] ?></h3>
                                        <span  style="margin-left:5px" class="nombredelgenero"><?php echo $row['nombre'] ?></span>

                                </div>
                            <div>
                            </div>
                            <?php
                        }
                        ?>
        </div>
    </div>
    <div class="contenido">
        <h1 class="titulop" style="color:white;">Películas</h1>
        <div class="contenidoPelicula">
                <?php
                    include("../RecuperacionPeliculas/model/conexion.php");
                        $query = "SELECT * FROM pelicula";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                            ?>
                                <div class="pelicula1">
                                     <form action="" style=" color:white; background-color: #FBDA61;
                                    background-image: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);margin-left:20px;
                                     width:200px ;padding:1rem; border-radius:20px;">
                                        <h5 name="pelicula_id" id="pelicula_id" style="color: #3c8091;">Id:<?php echo $row['pelicula_id'] ?></h5>
                                        <label for="" style="color:black;">Titulo:</label>
                                        <h3 style="color: gray;" class="nombredelpelicula"><b><?php echo $row['titulo'] ?></b></h3>
                                        <br>
                                        <label  style="color:gray; for="">Director:</label>
                                        <span style="color:gray;  class="tipodelpelicula"><b> <?php echo $row['director'] ?> </b></span>
                                        <br>
                                        <label style="color:gray;   for="">Visionada:</label>
                                        <span style="color:gray;  class="tipodelpelicula"> <b> <?php echo $row['visionada'] ?> </b></span>
                                        <br>
                                        <label style="color:gray;  for="">Género:</label>
                                        <span style="color:gray;  class="idpelicula"> <b> <?php echo $row['genero_id'] ?> </b></span>
                                        <br> 
                                        
                                    </form>
                                        <br>
                                </div>
                            <div>
                            </div>
                            <?php
                        }
                        ?>
        </div>
    </div>
  </div>
  <?php
        include '../RecuperacionPeliculas/controller/insert.php';
        include '../RecuperacionPeliculas/controller/insertar.php';
        include '../RecuperacionPeliculas/view/MGenero.php';
        include '../RecuperacionPeliculas/view/MPelicula.php';
        
    
    ?>
</body>
</html>