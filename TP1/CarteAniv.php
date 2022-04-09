<?php

class CarteAniv extends FPDF
{
    private $dateNaissance;
    private $slogan;
    private $image;

    public function __construct($dateNaissance, $slogan)
    {
        $this->dateNaissance = $dateNaissance;
        $this->slogan = $slogan;
        $this->image = 'Logo.jpg';
    }

    public function Carte($pdf){
        $pdf->Addpage();
        $pdf->Image($this->image,0,0,0,0,'jpg');
        $pdf->SetFont('Arial','B',15);
        $pdf->Text(10,10,$this->dateNaissance);
        $pdf->Text(40,40,$this->slogan);
    }
}