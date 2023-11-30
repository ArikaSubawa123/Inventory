<?php 
	include "Koneksi.php";

	$var1 = $_POST['lvl'];
	$var2 = $_POST['deskripsi'];
	$var3 = $_POST['referensi'];
	$var4 = $_POST['pengadaan'];
	$var5 = $_POST['pinjaman'];
	$var6 = $_POST['barangkeluar'];
	$var7 = $_POST['stok'];
	$var8 = $_POST['laporan'];
	$var9 = $_POST['backup'];

	// Perintah Insert Ke Tabel Level
	$query = "insert into level(level,deskripsi,a_referensi,a_pengadaan,a_peminjaman,a_barangkeluar,a_stok,a_laporan,a_backup) values ($var1,'$var2',$var3, $var4, $var5, $var6, $var7, $var8, $var9)";
	mysqli_query($koneksi,$query);
	// echo $query;
	header('location:Index.php?p=levelpengguna');
 ?>