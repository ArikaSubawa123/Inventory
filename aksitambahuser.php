<?php 
	include "Koneksi.php";

	$nama = $_POST['namausr'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$lvl = $_POST['lvl'];

	$query = "insert into user (nama,username,password,level) values ('$nama','$user','$pass','$lvl')";
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Pengguna');
 ?>