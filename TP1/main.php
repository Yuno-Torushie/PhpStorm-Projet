<?php
    require('Fpdf/fpdf.php');
    require_once('CarteAniv.php');

    $pdf = new FPDF();

    $carte1 = new CarteAniv('30 mars 2001','Jooyeux Anniversaire');

    $carte1->Carte($pdf);

    $pdf->Output();
?>