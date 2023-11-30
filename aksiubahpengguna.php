<?php 
	include "Koneksi.php";
	$id_usr = $_POST['id'];
	$namausr = $_POST['namausr'];
	$user	= $_POST['user'];
	$pass = $_POST['pass'];
	$lvl = $_POST['lvl'];

	$query = "update user set nama = '$namausr',username = '$user',password = '$pass' where id_user = '$id_usr'";
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Pengguna');

 ?>