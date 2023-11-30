<?php 
	include "Koneksi.php";
	// Deklarasi Variabel
	$idbrg = $_POST['idBrang'];
	$tglBrg = $_POST['tglKeluar'];
	$jmlBrg = $_POST['jmlKeluar'];
	$lokBrg = $_POST['Lok'];
	$penerimaBrg = $_POST['penerima'];

	// Ambil Nama Barang dari Tabel Barang
	$query2 = "select * from barang where id_barang='$idbrg'";
	$sql2 = mysqli_query($koneksi,$query2);
	//echo $query2;
	$row = mysqli_fetch_array($sql2);
	$brg1 = $row['nama_barang'];

	$query = "insert into barang_keluar(id_barang,nama_barang,tgl_keluar,jml_keluar,lokasi,penerima) values($idbrg,'$brg1','$tglBrg',$jmlBrg,'$lokBrg','$penerimaBrg')";
	mysqli_query($koneksi,$query);

	// Perintah Update Data Stok Barang (Dikurang 1)
	$query3 = "update barang set jumlah_barang=jumlah_barang-$jmlBrg where id_barang='$idbrg'";
	mysqli_query($koneksi,$query3);

	// Ambil Nilai Stok Terakhir
	$query4 = "select * from barang where id_barang='$idbrg'";
	$sql4 = mysqli_query($koneksi,$query4);
	$r4 = mysqli_fetch_array($sql4);
	$stok_terakhir = $r4['jumlah_barang'];

	// Perintah Insert ke tabel Stok
	$query5 = "insert into stok(id_barang,nama_barang,jml_keluar,total_barang,jenis_transaksi) values($idbrg,'$brg1','$jmlBrg',$stok_terakhir,'Transaksi Barang Keluar')";
	mysqli_query($koneksi,$query5);

	header('location:Index.php?p=barangkeluar');
 ?>