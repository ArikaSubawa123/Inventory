<?php 
	include "Koneksi.php";
	$peminjam = $_POST['peminjm'];
	$tgl_pnjm = $_POST['tgl_pinjam'];
	$idbrg = $_POST['id_barang'];
	$jml_brg = $_POST['jmlbrg'];

	// Ambil Nama Barang dari Tabel Barang
	$query2 = "select * from barang where id_barang='$idbrg'";
	$sql2 = mysqli_query($koneksi,$query2);
	//echo $query2;
	$row = mysqli_fetch_array($sql2);
	$brg1 = $row['nama_barang'];

	$query = "insert into pinjam_barang(peminjam,tgl_pinjam,id_barang,nama_barang,jml_barang) values('$peminjam','$tgl_pnjm','$idbrg','$brg1','$jml_brg')";
	// Perintah Ubah Table Barang
	$query3 = "update barang set jumlah_barang=jumlah_barang-$jml_brg where id_barang='$idbrg'";
	mysqli_query($koneksi,$query3);

	// Ambil Nilai Stok Terbaru
	$query4 = "select * from barang where id_barang='$idbrg'";
	$sql1 = mysqli_query($koneksi,$query4);
	$r1 = mysqli_fetch_array($sql1);
	$nilai_stok = $r1['jumlah_barang'];

	// Perintah Insert ke tabel stok
	$query5 = "insert into stok(id_barang,nama_barang,jml_keluar,total_barang,jenis_transaksi) values($idbrg,'$brg1',$jml_brg,$nilai_stok,'Transaksi Pinjam')";
	mysqli_query($koneksi,$query5);

	//echo $query;
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Peminjaman');
 ?>