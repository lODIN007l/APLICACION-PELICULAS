<?php
    $genero_id = $_POST['genero_id'];
    $nombre = $_POST['nombre'];
    
    $sqlE = "UPDATE genero SET nombre='$nombre' WHERE genero_id=$genero_id";
    require 'conexion.php';

    mysqli_query($conexion,$sqlE);

    header("Location: ../index.php");

?>