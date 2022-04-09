<?php
    require('Fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->Addpage();
    for ($i = 5; $i <= 1000; $i++) {
        $x = 10;
        $pdf->Line($i,$x,2*$i,2*$x);
        $x = $x + 10;
    }
    $pdf->Output();
?>