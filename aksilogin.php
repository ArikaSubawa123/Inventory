<?php 
	include "Koneksi.php";
	$user 	=$_POST['user'];
	$pass	=$_POST['pass'];
	
	$query="select * from user where username='$user' and password='$pass'";
	$sql=mysqli_query($koneksi,$query);
	$ketemu=mysqli_num_rows($sql);
	if($ketemu<=0){
		//echo "Username / Password Yang Dimaksukan Salah";
		header('location:Login.php');
		} else {
			//echo "Login Sukses";
			session_start();
			$r=mysqli_fetch_array($sql);
			$_SESSION['username'] = $r['username'];
			$_SESSION['level'] = $r['level'];
			$_SESSION['nama'] = $r['nama'];
			$_SESSION['id_user'] = $r['id_user'];
			header('location:Index.php');
		}
 ?>