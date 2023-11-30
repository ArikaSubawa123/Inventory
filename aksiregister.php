<?php 
	include "Koneksi.php";

	$nama = $_POST['name'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$level = $_POST['lvl'];

	$query = "insert into user(nama,username,password,level) values('$nama','$user','$pass',$level)";
	mysqli_query($koneksi,$query);
	header('location:Login.php');
 ?>