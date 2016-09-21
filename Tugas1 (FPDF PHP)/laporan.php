<?php 

include 'koneksi.php';
include 'fpdf.php';

// header colom
$field = array("ID Berita","Judul","Berita","Tanggal");

// row
$result = $koneksi->query("	SELECT  id_berita,
									judul_berita,
									isi_berita,
									tanggal
							FROM tb_berita");

$pdf = new FPDF("L","mm","A4");
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);		
foreach($field as $heading) {
		$pdf->Cell(69,12,$heading,1);
}

foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column){
		$pdf->Cell(69,20,$column,1);
	}
}
$pdf->Output();
 ?>