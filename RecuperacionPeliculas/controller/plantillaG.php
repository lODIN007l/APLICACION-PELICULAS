<?php
    require('../fpdf182/fpdf.php');
    
    class PDF extends FPDF{
        function Header(){
            $this->SetFont('Arial','B',20);
            $this->Cell(15);
            $this->SetTextColor(255,87,51);
            $this->Cell(180,20,"Reporte de Generos",10,10,'C');
            $this->Ln(15);
        }

        function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',20);
            $this->Cell(0,10,'APLICACIONES INFORMATICAS',0,0);

        }
    }

?>