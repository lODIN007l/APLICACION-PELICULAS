<?php
    $pelicula_id = $_POST['pelicula_id'];
    $titulo = $_POST['titulo'];
    $director = $_POST['director'];
    $anio = $_POST['anio'];
    $formato = $_POST['formato'];
    $visionada = $_POST['visionada'];
    $genero_id = $_POST['genero_id'];

    $sqlE = "UPDATE pelicula SET titulo='$titulo',director='$director', anio='$anio',formato='$formato',visionada='$visionada', genero_id='$genero_id' WHERE pelicula_id=$pelicula_id";
    require 'conexion.php';

    mysqli_query($conexion,$sqlE);

    header("Location: ../index.php");

?>
