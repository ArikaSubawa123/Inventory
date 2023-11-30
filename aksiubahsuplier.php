<?php 
	include "Koneksi.php";
	$id_sup = $_POST['id'];
	$namasup = $_POST['namasup'];
	$alamat	= $_POST['alamatsup'];
	$tlp = $_POST['tlpsup'];

	$query = "update suplier set nama_suplier = '$namasup',alamat_suplier = '$alamat',telp_suplier = '$tlp' where id_suplier = '$id_sup'";
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Suplier');

 ?>