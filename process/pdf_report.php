<?php
require('../fpdf/fpdf186/fpdf.php');
require_once("../models/Buku.php");

$buku = new Buku();
$data = $buku->getAll();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Laporan Data Buku',0,1,'C');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,10,'No',1,0,'C');
$pdf->Cell(50,10,'Judul',1,0,'C');
$pdf->Cell(40,10,'Pengarang',1,0,'C');
$pdf->Cell(20,10,'Tahun',1,0,'C');
$pdf->Cell(40,10,'Penerbit',1,0,'C');
$pdf->Cell(30,10,'Kategori',1,1,'C');

$no = 1;
$pdf->SetFont('Arial','',10);

while($row = $data->fetch_assoc()) {
    $pdf->Cell(10,10,$no++,1,0,'C');
    $pdf->Cell(50,10,$row['judul'],1);
    $pdf->Cell(40,10,$row['pengarang'],1);
    $pdf->Cell(20,10,$row['tahun'],1,0,'C');
    $pdf->Cell(40,10,$row['penerbit'],1);
    $pdf->Cell(30,10,$row['kategori'],1,1);
}

$pdf->Output();
