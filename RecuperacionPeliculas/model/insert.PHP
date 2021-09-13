<?php
   $conexion = mysqli_connect('localhost','root','','recuperacion');

   $sqlM = 'SELECT * FROM pelicula';
   $query = mysqli_query($conexion,$sqlM);

   if(!empty($_POST['titulo']) && !empty($_POST['director'])&& !empty($_POST['anio']) && !empty($_POST['formato']) && !empty($_POST['visionada']) && !empty($_POST['genero_id'])){
    $titulo = $_POST['titulo'];
    $director = $_POST['director'];
    $anio = $_POST['anio'];
    $formato = $_POST['formato'];
    $visionada = $_POST['visionada'];
    $genero_id = $_POST['genero_id'];
    $sqlI = "INSERT  into pelicula (titulo,director,anio,formato,visionada, genero_id) values ('$titulo','$director','$anio','$formato','$visionada','$genero_id')";
    mysqli_query($conexion,$sqlI);
    header("Location: ../index.php");
   }
?>

