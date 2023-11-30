<?php 
	include "Koneksi.php";

	$id = $_POST['idTrans'];
	$jmlAwal = $_POST['jmlAwal'];
	$nmbrg = $_POST['idbrg'];
	$suply = $_POST['idsply'];
	$jmlmsk = $_POST['jmlmsk'];
	$tglmsk = $_POST['tglmasuk'];

	$selisih = $jmlmsk-$jmlAwal;
	// Ambil Nama Barang dari Tabel Barang
	$query2 = "select * from barang where id_barang='$nmbrg'";
	$sql2 = mysqli_query($koneksi,$query2);
	echo $query2;
	$row = mysqli_fetch_array($sql2);
	$brg1 = $row['nama_barang'];

	// Perintah Update Barang Masuk
	$query1 = "update barang_masuk set id_suplier='$suply',jml_masuk='$jmlmsk',tgl_masuk='$tglmsk' where id='$id'";
	mysqli_query($koneksi,$query1);

	// Perintah Pertama Update Jumlah Data di Tabel Barang
	$query2 = "update barang set jumlah_barang=jumlah_barang+$selisih where id_barang='$nmbrg'";
	mysqli_query($koneksi,$query2);
	//echo $query2;
	// Insert ke Tabel Stok
	// Ambil jumlah nilai barang pada table barang.
	$query5 = "select * from barang where id_barang='$nmbrg'";
	$sql5 = mysqli_query($koneksi,$query5);
	$row5 = mysqli_fetch_array($sql5);
	$jml_barang = $row5['jumlah_barang']; //Variable nilai jml barang.
	$query4 = "insert into stok (id_barang,nama_barang,jml_masuk,jml_keluar,total_barang,jenis_transaksi) values($nmbrg,'$brg1',$selisih,0,$jml_barang,'Pengadaan Barang (Revisi)')";
	$sql4 = mysqli_query($koneksi,$query4);
	// Kembali ke menu awal.
	header('location:Index.php?p=Pengadaan');
 ?>