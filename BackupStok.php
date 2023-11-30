<?php 
	include "Koneksi.php";
	$nama_tabel="stok";
	$nama_file_backup="D:/xampp/htdocs/Inventory/Backup/Stok.sql";
	$sql="select * into outfile '$nama_file_backup' from $nama_tabel";

	$backup = mysqli_query($koneksi, $sql);
	if (!$backup) {
		# code...
		echo "Backup Data Error!";
	}
	echo "Backup Data Success..";

	header('location:Index.php?p=Backup');
 ?>