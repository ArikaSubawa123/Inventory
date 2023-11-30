<?php 
	include "Koneksi.php";
	$id = $_GET['id'];
	$query = "delete from suplier where id_suplier='$id'";
	mysqli_query($koneksi, $query);
	header('location:Index.php?p=Suplier');
 ?>