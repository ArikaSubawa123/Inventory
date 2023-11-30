<?php 
	include "Koneksi.php";
	$stokAwl = $_POST['stokAwal'];
	$id = $_POST['idPinjam'];
	$peminjam = $_POST['peminjm'];
	$tgl_pnjm = $_POST['tgl_pinjam'];
	$idbrg = $_POST['id_barang'];
	$jml_brg = $_POST['jmlbrg'];
	$tglback = $_POST['dateback'];
	$kondisi = $_POST['kondisi'];
	$selisih = $jml_brg-$stokAwl;

	// Ambil Nama Barang dari Tabel Barang
	$query2 = "select * from barang where id_barang='$idbrg'";
	$sql2 = mysqli_query($koneksi,$query2);
	//echo $query2;
	$row = mysqli_fetch_array($sql2);
	$brg1 = $row['nama_barang'];
	// Update Tabel Peminjaman / Pinjam Barang
	$query = "UPDATE pinjam_barang set tgl_kembali='$tglback',kondisi='$kondisi',status='Kembali' WHERE id_pinjam='$id'";
	// Perintah Update Jumlah Barang
	$query3 = "UPDATE barang set jumlah_barang=jumlah_barang+$jml_brg where id_barang='$idbrg'";
	mysqli_query($koneksi,$query3);
	mysqli_query($koneksi,$query);

	// Perintah ambil Data Stok Terakhir
	$query4 = "SELECT * FROM barang where id_barang='$idbrg'";
	$sql4 = mysqli_query($koneksi,$query4);
	$r4 = mysqli_fetch_array($sql4);
	$nilai_stok_akhir = $r4['jumlah_barang'];

	// Perintah Insert ke Tabel Stok
	$query5 = "insert into stok(id_barang,nama_barang,jml_masuk,total_barang,jenis_transaksi) values($idbrg,'$brg1',
	$jml_brg,$nilai_stok_akhir,'Transaksi Pengembalian')";
	mysqli_query($koneksi,$query5);
	// echo $query5;

	header('location:Index.php?p=Peminjaman');
 ?>