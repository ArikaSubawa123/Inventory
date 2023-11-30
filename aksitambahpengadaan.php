<?php 
	include "Koneksi.php";

	$nmbrg = $_POST['idbrg'];
	$suply = $_POST['idsply'];
	$jmlmsk = $_POST['jmlmsk'];
	$tglmsk = $_POST['tglmasuk'];

	// Ambil Nama Barang dari Tabel Barang
	$query2 = "select * from barang where id_barang='$nmbrg'";
	$sql2 = mysqli_query($koneksi,$query2);
	echo $query2;
	$row = mysqli_fetch_array($sql2);
	$brg1 = $row['nama_barang'];

	//Query Tambah barang masuk
	$query = "insert into barang_masuk(id_barang,nama_barang,tgl_masuk,jml_masuk,id_suplier) values('$nmbrg','$brg1','$tglmsk','$jmlmsk','$suply')";
	echo $query;
	mysqli_query($koneksi,$query);

	// Perintah Menambah data stok barang sesuai jumlah yg diinput.
	$query3 = "update barang set jumlah_barang = jumlah_barang+$jmlmsk where id_barang='$nmbrg'";
	$sql3 = mysqli_query($koneksi,$query3);
	// Perintah Insert Table Stok
	// Ambil jumlah nilai barang pada table barang.
	$query5 = "select * from barang where id_barang='$nmbrg'";
	$sql5 = mysqli_query($koneksi,$query5);
	$row5 = mysqli_fetch_array($sql5);
	$jml_barang = $row5['jumlah_barang']; //Variable nilai jml barang.
	$query4 = "INSERT INTO stok (id_barang,nama_barang,jml_masuk,jml_keluar,total_barang,jenis_transaksi) values('$nmbrg','$brg1','$jmlmsk',0,$jml_barang,'Pengadaan Barang')";
	$sql4 = mysqli_query($koneksi,$query4);
	// Kembali ke menu awal.
	header('location:Index.php?p=Pengadaan');
 ?>