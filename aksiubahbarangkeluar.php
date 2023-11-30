<?php 
	include "Koneksi.php";
	$id = $_POST['idTrans'];
	$jmlAwl = $_POST['jmlAwal'];
	$idbrg = $_POST['idBrg'];
	$tglBrg = $_POST['tglKeluar'];
	$jmlBrg = $_POST['jmlKeluar'];
	$lokBrg = $_POST['lok'];
	$penerimaBrg = $_POST['penerima'];
	$selisih = $jmlBrg-$jmlAwl;

	// Ambil Nama Barang dari Tabel Barang
	$query = "select * from barang where id_barang='$idbrg'";
	$sql = mysqli_query($koneksi,$query);
	$row = mysqli_fetch_array($sql);
	$brg1 = $row['nama_barang'];

	// Update Data Tabel Barang Keluar
	$query1 = "update barang_keluar set tgl_keluar='$tglBrg', jml_keluar=$jmlBrg, lokasi='$lokBrg', penerima='$penerimaBrg' where id_out=$id";
	mysqli_query($koneksi,$query1);

	// Update Stok Di Tabel Barang
	$query2 = "update barang set jumlah_barang=jumlah_barang-$selisih where id_barang=$idbrg";
	mysqli_query($koneksi,$query2);

	// AMbil Nilai Stok Terakhir
	$query3 = "select * from barang where id_barang='$idbrg'";
	$sql3 = mysqli_query($koneksi,$query3);
	$r3 = mysqli_fetch_array($sql3);
	$stok_akhir = $r3['jumlah_barang'];

	// Masukkan data ke tabel stok
	$query4 = "insert into stok(id_barang,nama_barang,jml_keluar,total_barang,jenis_transaksi) values($idbrg,'$brg1',$selisih,$stok_akhir,'Revisi Transaksi Barang Keluar')";
	mysqli_query($koneksi,$query4);

	//echo $query4;
	header('location:Index.php?p=barangkeluar');

 ?>