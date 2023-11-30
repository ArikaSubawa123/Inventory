<?php 
	include "Koneksi.php";
	$id = $_GET['id'];
	$query = "delete from barang where id_barang='$id'";
	mysqli_query($koneksi, $query);
	header('location:Index.php?p=Barang');
 ?>