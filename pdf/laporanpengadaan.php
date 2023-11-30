<?php

include "fungsi_rupiah.php";

// memanggil library FPDF
require('fpdf.php');
class PDF extends FPDF
{
	// Page footer
	function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',8);
		// Page number
		$this->Cell(0,10,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// intance object dan memberikan pengaturan halaman PDF
ob_start();
$pdf = new PDF('p','mm','A4');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();
ob_end_flush();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'DATA INVENTORY',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell($lebar_kertas-20,5,'Laporan Data Pengadaan',0,1,'C');
// $pdf->Line(0,27,$lebar_kertas,27);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,4,'',0,1);

$lk1=10;
$lk2=30;
$lk3=30;
$lk4=30;
$lk5=40;
$lk6=30;

#Membuat judul kolom
$pdf->SetFont('Arial','B','11');
$pdf->Cell($lk1,6,'ID',1,0,'C');
$pdf->Cell($lk2,6,'ID Barang',1,0,'C');
$pdf->Cell($lk3,6,'ID Suplier',1,0,'C');
$pdf->Cell($lk4,6,'Nama Barang',1,0,'C');
$pdf->Cell($lk5,6,'Tgl Masuk',1,0,'C');
$pdf->Cell($lk6,6,'Jumlah Masuk',1,1,'C');

include "koneksi.php";
$query = "select * from barang_masuk order by id";
$sql = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($sql)) {
	# code...
	$pdf->SetFont('Arial','','11');
	$pdf->Cell($lk1,20,$row['id'],1,0,'C');
	$pdf->Cell($lk2,20,$row['id_barang'],1,0,'C');
	$pdf->Cell($lk3,20,$row['id_suplier'],1,0,'C');
	$pdf->Cell($lk4,20,$row['nama_barang'],1,0,'C');
	$pdf->Cell($lk5,20,$row['tgl_masuk'],1,0,'C');
	$pdf->Cell($lk6,20,$row['jml_masuk'],1,1,'C');
}
// Script Ambil Data
$pdf->Output();
?>
