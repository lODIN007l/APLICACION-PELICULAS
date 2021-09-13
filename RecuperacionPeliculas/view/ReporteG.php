<?php
    $conexion = mysqli_connect('localhost','root','','recuperacion');

    $sqlM = 'SELECT * FROM genero';
    $query = mysqli_query($conexion,$sqlM);
     
    include '../controller/plantillaG.php';
    $pdf = new PDF();

    $pdf->AddPage();
    $pdf->SetFillColor(78,83,160);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,6,'genero_id',1,0,'C');
    $pdf->Cell(20,6,'nombre',1,0,'C');
    
    
    $pdf->SetFont('Arial','',10);
    while($mostrar = $query->fetch_assoc()){
        $pdf->Ln();
        $pdf->Cell(20,6,$mostrar['genero_id'],1,0,'C');
        $pdf->Cell(20,6,$mostrar['nombre'],1,0,'C');
        
    }
    $pdf->Output('I','reporteGenero.pdf',true);
?>