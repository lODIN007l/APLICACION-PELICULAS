<?php
    $conexion = mysqli_connect('localhost','root','','recuperacion');

    $sqlM = 'SELECT * FROM pelicula WHERE genero_id = 10 ';
    $query = mysqli_query($conexion,$sqlM);
     
    include '../controller/plantillaAnimacion.php';
    $pdf = new PDF();

    $pdf->AddPage();
    $pdf->SetFillColor(78,83,160);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,6,'genero_id',1,0,'C');
    
    $pdf->Cell(30,6,'titulo',1,0,'C');
    $pdf->Cell(25,6,'director',1,0,'C');
    $pdf->Cell(30,6,'anio',1,0,'C');
    $pdf->Cell(30,6,'formato',1,0,'C');
    $pdf->Cell(30,6,'visionada',1,0,'C');
    
    $pdf->SetFont('Arial','',10);
    while($mostrar = $query->fetch_assoc()){
        $pdf->Ln();
        $pdf->Cell(30,6,$mostrar['genero_id'],1,0,'C');
      
        $pdf->Cell(30,6,$mostrar['titulo'],1,0,'C');
        $pdf->Cell(25,6,$mostrar['director'],1,0,'C');
        $pdf->Cell(30,6,$mostrar['anio'],1,0,'C');
        $pdf->Cell(30,6,$mostrar['formato'],1,0,'C');
        $pdf->Cell(30,6,$mostrar['visionada'],1,0,'C');
        
    }
    $pdf->Output('I','reportePeliculas.pdf',true);
?>