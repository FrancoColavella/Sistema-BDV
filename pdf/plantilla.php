<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{

    function Header()
    {

        // FONDO HEADER
        $this->SetFillColor(18,32,51);
        $this->Rect(0,0,220,35,'F');

        // LOGO BDV
        $this->SetFont('Arial','B',28);
        $this->SetTextColor(16,183,156);

        $this->SetXY(15,10);
        $this->Cell(30,10,'BDV',0,0,'L');

        // MUEBLES
        $this->SetFont('Arial','B',24);
        $this->SetTextColor(255,255,255);

        $this->SetXY(42,11);
        $this->Cell(60,10,'Muebles',0,0,'L');

        // TITULO
        $this->SetFont('Arial','B',18);

        $this->SetXY(120,12);
        $this->Cell(70,10,'COMPROBANTE',0,0,'R');

        // LINEA
        $this->SetDrawColor(16,183,156);
        $this->SetLineWidth(1);

        $this->Line(15,38,195,38);

        $this->Ln(30);

    }

    function Footer()
    {

        $this->SetY(-20);

        $this->SetDrawColor(220,220,220);
        $this->Line(15,$this->GetY(),195,$this->GetY());

        $this->Ln(4);

        $this->SetFont('Arial','',9);
        $this->SetTextColor(120,120,120);

        $this->Cell(
            0,
            10,
            utf8_decode('BDV Muebles - Página '.$this->PageNo().'/{nb}'),
            0,
            0,
            'C'
        );

    }

}
?>