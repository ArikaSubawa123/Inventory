<?php 
	$id = $_GET['level'];
	$query = "delete from level where level='$id'";
	mysqli_query($koneksi,$query);
	header('location:Index.php?p=levelpengguna');
 ?>