<?php

    $genero_id = $_POST['genero_id'];
    $sqlD = "DELETE FROM genero WHERE genero_id =$genero_id";
    require 'conexion.php';

    mysqli_query($conexion,$sqlD);
    header("Location: ../index.php");
?>