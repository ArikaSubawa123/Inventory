<?php 
	include "Koneksi.php";
	$stokAwl = $_POST['stokAwal'];
	$id = $_POST['idPinjam'];
	$peminjam = $_POST['peminjm'];
	$tgl_pnjm = $_POST['tgl_pinjam'];
	$idbrg = $_POST['id_barang'];
	$jml_brg = $_POST['jmlbrg'];
	$selisih = $jml_brg-$stokAwl;

	// Ambil Nama Barang dari Tabel Barang
	$query2 = "select * from barang where id_barang='$idbrg'";
	$sql2 = mysqli_query($koneksi,$query2);
	//echo $query2;
	$row = mysqli_fetch_array($sql2);
	$brg1 = $row['nama_barang'];

	// Update
	$query = "update pinjam_barang set peminjam='$peminjam', tgl_pinjam='$tgl_pnjm', jml_barang='$jml_brg' where id_pinjam = '$id'";
	// Perintah Ubah Table Barang
	//$query3 = "update barang set jumlah_barang=jumlah_barang-$jml_brg where id_barang='$idbrg'";
	//mysqli_query($koneksi,$query3);

	// Perintah Untuk Update Stok pada Table Barang
	$query3 = "update barang SET jumlah_barang=jumlah_barang-$selisih where id_barang='$idbrg'";
	mysqli_query($koneksi,$query3);
	
	// Ambil Nilai Stok Terakhir
	$query4 = "SELECT * FROM barang where id_barang='$idbrg'";
	$sql4 = mysqli_query($koneksi,$query4);
	$r4 = mysqli_fetch_array($sql4);
	$nilai_stok_terakhir = $r4['jumlah_barang'];

	// Perintah Insert ke Tabel Stok
	$query5 = "INSERT INTO stok(id_barang,nama_barang,jml_keluar,total_barang,jenis_transaksi) values ($idbrg,'$brg1',$selisih,$nilai_stok_terakhir,'Revisi Peminjaman (Transaksi)')";
	mysqli_query($koneksi,$query5);

	// Eksekusi
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=Peminjaman');
 ?>