<?php 
	include "Koneksi.php";

	$namasup = $_POST['namasup'];
	$Alamat = $_POST['alamatsup'];
	$tlp = $_POST['tlpsup'];

	$query = "insert into suplier (nama_suplier,alamat_suplier,telp_suplier) values ('$namasup','$Alamat','$tlp')";
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Suplier');
 ?>