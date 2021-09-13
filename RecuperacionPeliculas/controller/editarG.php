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
 <H1 style="color:white; margin-top:10px; text-align: center; ">EDITAR GENERO  </H1>
  <div style="margin:500px; margin-top:300px;margin-bottom:500px;" class="contenidoPrincipal">
  
  <table class="table table-bordered table-hover" id="datos">
            <thead class="thead-dark" style="text-align: center; ">
                <tr>
                    <th scope="col">genero_id</th>
                    <th scope="col">nombre</th>
                    
                    <th scope="col">EDITAR</th>

                </tr>
                <tbody style="text-align: center;">
                <?php
        require '../model/conexion.php';
        $genero_id = $_POST['genero_id'];
        $sql = "SELECT * FROM genero WHERE genero_id='$genero_id'";
        $select = mysqli_query($conexion,$sql);
        while($mostrar = mysqli_fetch_array($select)){
      ?>
      
        <tr>
            <form  action="../model/editarG.php" method="POST">
            <th style=" color:white ;padding:2rem; border-radius:10px; border-color:white;" scope="row"><?php echo $mostrar['genero_id'] ?></th>
            <input style="color:white; padding:1rem; border-radius:10px; border-color:white;"  type="hidden" value="<?php echo $mostrar['genero_id'] ?>"  id="genero_id" name="genero_id">
            <td><input style="padding:1rem; border-radius:10px; border-color:black;"  type="text" value="<?php echo $mostrar['nombre'] ?>"  id="nombre" name="nombre"></td>
           
            <td><button style="padding:1rem; border-radius:10px; border-color:color:white; background-color: #00e933;
            background-image: linear-gradient(160deg, #00e933 0%, #76abc7 100%);
            color:white;"  type="submit" class="btn btn-success">EDITAR</button></td>
            </form>
        </tr>

        <?php
            }
        ?>
                </tbody>
            </thead>
        </table>
  </div>
</body>
</html>