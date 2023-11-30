<?php 
	include "Koneksi.php";
	$id = $_GET['id'];
	$query = "delete from user where id_user='$id'";
	mysqli_query($koneksi, $query);
	header('location:Index.php?p=Pengguna');
 ?>