<?php 
	include "Koneksi.php";

	session_start();
	$_SESSION['username']='';
	$_SESSION['level']='';
	$_SESSION['nama']='';
	$_SESSION['id_user'];
	session_destroy();
	unset($_SESSION['username']);
	header('location:Login.php');
 ?>