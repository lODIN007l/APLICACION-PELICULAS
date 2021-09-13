<?php
   $conexion = mysqli_connect('localhost','root','','recuperacion');

   $sqlM = 'SELECT * FROM genero';
   $query = mysqli_query($conexion,$sqlM);

   if( !empty($_POST['nombre']) ){
    $nombre = $_POST['nombre'];
    $sqlI = "INSERT  into genero (nombre) values ('$nombre')";
    mysqli_query($conexion,$sqlI);
    header("Location: ../index.php");
   }
?>

