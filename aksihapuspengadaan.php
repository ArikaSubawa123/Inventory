<?php 
	$id = $_GET['id'];
	$query = "DELETE barang_masuk where id='$id'";
	$sql = mysqli_query($koneksi,$query);
	header('location:Index.php?p=Pengadaan');
 ?>