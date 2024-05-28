<?php
require('variables.php');
global $nombre, $apellido, $document_number, $date_of_birth, $age, $document_number, $plan, $issuing_date, $effective_date, $term_date, $preexistence;
//Agrego imagenes
$fpdf->Image(__DIR__ . '/BordeIzqGFA.png', 0, 0, -500, -500);
$fpdf->Image(__DIR__ . '/Logo_GFA.png', 130, 25, -250, -250); //archivo, de izq a der, de arriba a abajo, ancho, alto, tipo de archivo

$fpdf->SetAutoPageBreak(true, 10);
$fpdf->SetFont('Arial', '', 12);
$fpdf->SetTopMargin(10);
$fpdf->SetLeftMargin(10);
$fpdf->SetRightMargin(10);

/* --- Cell --- */
$fpdf->SetXY(20, 20);
$fpdf->SetFont('', 'B', 12);
$fpdf->Cell(100, 2, 'Numero de voucher: V-' . $document_number, 0, 1, 'L', false);

/* --- Cell --- */
$fpdf->SetXY(20, 30);
$fpdf->SetFont('', 'B', 12);
$nombre_apellido = $nombre . ' ' . $apellido;
$fpdf->Cell(100, 2, 'Nombre y apellido: ' . $nombre_apellido, 0, 1, 'L', false);

/* --- Cell --- */
$fpdf->SetXY(20, 40);
$fpdf->SetFont('', 'B', 12);
$fpdf->Cell(100, 2, $plan, 0, 1, 'L', false);
/* --- Line --- */
$fpdf->Line(10, 46, 200, 46);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(20, 48);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Fecha de solicitud', 'B', 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(80, 48);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Inicio de vigencia', 'B', 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(140, 48);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Fin de vigencia', 'B', 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(20, 58);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $issuing_date, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(80, 58);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $effective_date, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(140, 58);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $term_date, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetXY(20,75);
$fpdf->SetFont('', 'I', 16);
$fpdf->Cell(100, 2, 'Informacion del beneficiado', 0, 1, 'L', false);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(60, 85);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Nombre completo:', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(100, 85);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $nombre_apellido, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(60, 95);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Documento:', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(100, 95);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $document_number, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(60, 105);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, 'Fecha de nacimiento:', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(100, 105);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $date_of_birth . ' (' . $age . ')', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetXY(20,120);
$fpdf->SetFont('', 'I', 16);
$fpdf->Cell(100, 2, 'Tipo de plan', 0, 1, 'L', false);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(20, 130);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, $plan, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(80, 130);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Plan exequial', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(93,93,93);
$fpdf->SetXY(140, 130);
$fpdf->SetFont('', 'I', 12);
$fpdf->Cell(50, 4, 'Grupo familiar', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(20, 140);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, 'Familiar', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(80, 140);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, $plan, 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetTextColor(0,0,0);
$fpdf->SetXY(140, 140);
$fpdf->SetFont('', '', 12);
$fpdf->Cell(50, 4, 'F2', 0, 1, 'C', false);
$fpdf->SetTextColor(0);
/* --- Cell --- */
$fpdf->SetXY(20,150);
$fpdf->SetFont('', 'I', 16);
$fpdf->Cell(100, 2, 'Cobertura', 0, 1, 'L', false);
/* --- Cells --- */
$fpdf->SetFont('Arial', '', 10);
$fpdf->setXY(10,160);
$fpdf->setTextColor(0,0,0);
$fpdf->Cell(0, 5, utf8_decode($cobertura1), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura2), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura3), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura4), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura5), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura6), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura7), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura8), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura9), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura10), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura11), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura12), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura13), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura14), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura15), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura16), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura17), 0, 1, 'L');
$fpdf->Cell(0, 5, utf8_decode($cobertura18), 0, 1, 'L');
?>