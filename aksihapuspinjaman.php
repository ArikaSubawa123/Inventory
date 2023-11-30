<?php 
	$id = $_GET['id'];
	$query = "DELETE pinjam_barang where id='$id'";
	$sql = mysqli_query($koneksi,$query);
	header('location:Index.php?p=Peminjaman');
 ?>