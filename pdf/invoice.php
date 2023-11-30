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
$pdf = new PDF('p','mm','A4');
		
// membuat halaman baru
$pdf->AliasNbPages();
$pdf->AddPage();
// mencetak string
$lebar_kertas=$pdf->GetPageWidth();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell($lebar_kertas-20,5,'ONLINESHOP TERBAIK',0,1,'L');
$pdf->SetFont('Arial','',13);
$pdf->Cell($lebar_kertas-20,5,'Invoice Transaksi',0,1,'L');
$pdf->SetLineWidth(1);
$pdf->Line(10,21,$lebar_kertas-12,21);
// $pdf->Line(0,27,$lebar_kertas,27);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,4,'',0,1);

$lk1=40;
$lk2=5;
$lk3=40;
$lk4=40;
$lk5=5;
$lk6=40;

$id=$_GET['id'];
include "koneksi.php";
	$query1="select transaksi.*,pelanggan.Nama,pelanggan.Alamat,pelanggan.NoHp,pelanggan.Email from transaksi,pelanggan where transaksi.IdPelanggan=pelanggan.IdPelanggan and IdTransaksi='$id'";
	$sql1=mysqli_query($conn,$query1);
	$r1=mysqli_fetch_array($sql1);

$pdf->SetFont('Arial','',10);
$pdf->Cell($lk1,'5','Nomor Transaksi',0,0,'L');
$pdf->Cell($lk2,'5',' : ',0,0,'L');
$pdf->Cell($lk3,'5',$r1['IdTransaksi'],0,0,'L');
$pdf->Cell($lk4,'5','Nama Pelanggan',0,0,'L');
$pdf->Cell($lk5,'5',' : ',0,0,'L');
$pdf->Cell($lk6,'5',$r1['Nama'],0,1,'L');

$pdf->Cell($lk1,'5','Tanggal Transaksi',0,0,'L');
$pdf->Cell($lk2,'5',' : ',0,0,'L');
$pdf->Cell($lk3,'5',$r1['TanggalTransaksi'],0,0,'L');
$pdf->Cell($lk4,'5','Alamat',0,0,'L');
$pdf->Cell($lk5,'5',' : ',0,0,'L');
$pdf->Cell($lk6,'5',$r1['Alamat'],0,1,'L');

$pdf->Cell($lk1,'5','Cara Bayar',0,0,'L');
$pdf->Cell($lk2,'5',' : ',0,0,'L');
$pdf->Cell($lk3,'5',$r1['CaraBayar'],0,0,'L');
$pdf->Cell($lk4,'5','No Handphone',0,0,'L');
$pdf->Cell($lk5,'5',' : ',0,0,'L');
$pdf->Cell($lk6,'5',$r1['NoHp'],0,1,'L');

$pdf->Cell($lk1,'5','Total',0,0,'L');
$pdf->Cell($lk2,'5',' : ',0,0,'L');
$pdf->Cell($lk3,'5',format_rupiah($r1['Total']),0,0,'L');
$pdf->Cell($lk4,'5','Email',0,0,'L');
$pdf->Cell($lk5,'5',' : ',0,0,'L');
$pdf->Cell($lk6,'5',$r1['Email'],0,1,'L');

$pdf->Cell($lk1,'5','Biaya Kirim',0,0,'L');
$pdf->Cell($lk2,'5',' : ',0,0,'L');
$pdf->Cell($lk3,'5',$r1['Ongkir'],0,0,'L');
$pdf->Cell($lk4,'5','Status',0,0,'L');
$pdf->Cell($lk5,'5',' : ',0,0,'L');
$pdf->Cell($lk6,'5',$r1['Status'],0,1,'L');

$l1=20;
$l2=80;
$l3=30;
$l4=30;
$l5=30;

$pdf->Cell('1','7','',0,'1');
$pdf->SetLineWidth(0,2);
$pdf->Cell($l1,'5','ID Barang',1,0,'C');
$pdf->Cell($l2,'5','Nama Barang',1,0,'C');
$pdf->Cell($l3,'5','Harga',1,0,'C');
$pdf->Cell($l4,'5','Jumlah',1,0,'C');
$pdf->Cell($l5,'5','Subtotal',1,1,'C');

$gt=0;
$query2="select detailtransaksi.*,barang.NamaBarang from detailtransaksi,barang where detailtransaksi.IdBarang=barang.IdBarang and IdTransaksi='$id'";
$sql2=mysqli_query($conn, $query2);
while($r2=mysqli_fetch_array($sql2)){
	$sub=$r2['Jumlah']*$r2['Harga'];
	$gt=$gt+$sub;
	$sub=format_rupiah($sub); 
	$harga=format_rupiah($r2['Harga']);
	
	$pdf->Cell($l1,'5',$r2['IdBarang'],1,0,'C');
	$pdf->Cell($l2,'5',$r2['NamaBarang'],1,0,'C');
	$pdf->Cell($l3,'5',$harga,1,0,'R');
	$pdf->Cell($l4,'5',$r2['Jumlah'],1,0,'R');
	$pdf->Cell($l5,'5',$sub,1,1,'R');
}
// TUTUP WHILE
$pdf->Cell($l1+$l2+$l3+$l4,5,'Grandtotal',1,0,'C');
$pdf->Cell($l5,'5',format_rupiah($gt),1,1,'R');

$pdf->Output();
?>
