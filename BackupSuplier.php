<?php 
	include "Koneksi.php";
	$nama_tabel="suplier";
	$nama_file_backup="D:/xampp/htdocs/Inventory/Backup/Suplier.sql";
	$sql="select * into outfile '$nama_file_backup' from $nama_tabel";

	$backup = mysqli_query($koneksi, $sql);
	if (!$backup) {
		# code...
		echo "Backup Data Error!";
	}
	echo "Backup Data Success..";

	header('location:Index.php?p=Backup');
 ?>