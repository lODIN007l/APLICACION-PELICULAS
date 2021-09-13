<?php

    $pelicula_id = $_POST['pelicula_id'];
    $sqlD = "DELETE FROM pelicula WHERE pelicula_id =$pelicula_id";
    require 'conexion.php';

    mysqli_query($conexion,$sqlD);
    header("Location: ../index.php");
?>