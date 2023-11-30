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
	$query = "update level set deskripsi='$var2', a_referensi=$var3, a_pengadaan=$var4, a_peminjaman=$var5, a_barangkeluar=$var6, a_stok=$var7, a_laporan=$var8, a_backup=$var9 where level=$var1";
	mysqli_query($koneksi,$query);
	// echo $query;
	header('location:Index.php?p=levelpengguna');
 ?>