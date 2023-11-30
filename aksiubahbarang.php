<?php 
	include "Koneksi.php";
	$id_brg = $_POST['idbrg'];
	$namabrg = $_POST['namabrg'];
	$spek	= $_POST['spek'];
	$lokasi = $_POST['lokasi'];
	$kondisi = $_POST['kondisi'];
	$jmlbrg = $_POST['jmlbrg'];
	$sumberdana = $_POST['dana'];

	$query = "update barang set nama_barang = '$namabrg', spesifikasi = '$spek', lokasi = '$lokasi', kondisi = '$kondisi', jumlah_barang = $jmlbrg, sumber_dana = '$sumberdana' where id_barang = '$id_brg'";
	//echo $query;
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Barang');

 ?>