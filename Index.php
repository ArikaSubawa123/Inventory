<?php 
	session_start();
	include "Koneksi.php";
	//CEK LOGIN
	if(empty($_SESSION['level'])){
		header('location:Login.php');
	}
	$level = $_SESSION['level'];
	// Ambil Pengaturan Hak Akses Pada Tabel Level
	$query1 = "select * from level where level=$level";
	$sql1 = mysqli_query($koneksi,$query1);
	$akses = mysqli_fetch_array($sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Inventory Terbaru</title>
	<link rel="stylesheet" type="text/css" href="Asset/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="Plugins/ckeditor/ckeditor.js"></script>
</head>
<body>
	<!-- Navbar -->
		<header>
			<div class="container">
				<div id="nav1">
					<a href="Index.php?p=Home">Dashboard</a>
					<?php 
						if ($akses['a_referensi']==1) {
							# code...
					 ?>
					<a href="Index.php?p=Barang">Barang</a>
					<a href="Index.php?p=Suplier">Suplier</a>
					<a href="Index.php?p=Pengguna">Pengguna</a>
					<?php
						} 
					 ?>
					<?php 
						if ($akses['a_pengadaan']==1) {
							# code...
					 ?>
					<a href="Index.php?p=Pengadaan">Pengadaan</a>
					<?php
						} 
					 ?>
					<?php 
						if ($akses['a_peminjaman']==1) {
							# code...
					 ?>
					<a href="Index.php?p=Peminjaman">Peminjaman</a>
					<?php
						} 
					 ?>
					<?php 
						if ($akses['a_barangkeluar']==1) {
							# code...
					 ?>
					<a href="Index.php?p=barangkeluar">Barang Keluar</a>
					<?php
						} 
					 ?>
					<?php 
						if ($akses['a_stok']==1) {
							# code...
					 ?>
					<a href="Index.php?p=Stok">Stok</a>
					<?php
						} 
					 ?>
					<?php 
						if ($akses['a_laporan']==1) {
							# code...
					 ?>
					<a href="Index.php?p=Laporan">Laporan</a>
					<?php
						}
					 ?>
					<?php 
						if ($akses['a_backup']==1) {
							# code...
					 ?>
					<a href="Index.php?p=Backup">Backup</a>
					<?php
						} 
					 ?>
					 <?php 
						if ($akses['a_referensi']==1) {
							# code...
					 ?>
					<a href="Index.php?p=levelpengguna">Level Pengguna</a>
					<?php
						} 
					 ?>
					<a href="Logout.php" style="float: right;">Logout</a>
				</div>
			</div>
		</header>
	<!-- End Navbar -->
	<main id="content">
		<div class="container">
			<?php include "Konten.php"; ?>
		</div>
	</main>
	<?php include "footer.php"; ?>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>