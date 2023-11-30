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
$pdf = new PDF('l','mm','A4');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();
ob_end_flush();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'DATA INVENTORY',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell($lebar_kertas-20,5,'Laporan Data Peminjaman',0,1,'C');
// $pdf->Line(0,27,$lebar_kertas,27);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$lk1=10;
$lk2=30;
$lk3=30;
$lk4=20;
$lk5=30;
$lk6=30;
$lk7=30;
$lk8=30;
$lk9=30;

#Membuat judul kolom
$pdf->SetFont('Arial','B','11');
$pdf->Cell($lk1,8,'ID',1,0,'C');
$pdf->Cell($lk2,8,'Peminjam',1,0,'C');
$pdf->Cell($lk3,8,'Tgl Pinjam',1,0,'C');
$pdf->Cell($lk4,8,'ID Barang',1,0,'C');
$pdf->Cell($lk5,8,'Nama Barang',1,0,'C');
$pdf->Cell($lk6,8,'Jumlah Barang',1,0,'C');
$pdf->Cell($lk7,8,'Tgl Kembali',1,0,'C');
$pdf->Cell($lk8,8,'Kondisi',1,0,'C');
$pdf->Cell($lk9,8,'Status',1,1,'C');

include "koneksi.php";
$query = "select * from pinjam_barang order by id_pinjam";
$sql = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($sql)) {
	# code...
	$pdf->SetFont('Arial','','11');
	$pdf->Cell($lk1,20,$row['id_pinjam'],1,0,'C');
	$pdf->Cell($lk2,20,$row['peminjam'],1,0,'C');
	$pdf->Cell($lk3,20,$row['tgl_pinjam'],1,0,'C');
	$pdf->Cell($lk4,20,$row['id_barang'],1,0,'C');
	$pdf->Cell($lk5,20,$row['nama_barang'],1,0,'C');
	$pdf->Cell($lk6,20,$row['jml_barang'],1,0,'C');
	$pdf->Cell($lk7,20,$row['tgl_kembali'],1,0,'C');
	$pdf->Cell($lk8,20,$row['kondisi'],1,0,'C');
	$pdf->Cell($lk9,20,$row['status'],1,1,'C');
}
// Script Ambil Data
$pdf->Output();
?>
