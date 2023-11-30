<?php 
	include "Koneksi.php";

	$namabrg = $_POST['namabrg'];
    $spek	= $_POST['spek'];
    // next
	$lokasi = $_POST['lokasi'];
	$kondisi = $_POST['kondisi'];
	$jmlbrg = $_POST['jmlbrg'];
	$sumberdana = $_POST['dana'];

	$query = "insert into barang (nama_barang,spesifikasi,lokasi,kondisi,jumlah_barang,sumber_dana) values ('$namabrg','$spek','$lokasi','$kondisi','$jmlbrg','$sumberdana')";
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Barang');
 ?>