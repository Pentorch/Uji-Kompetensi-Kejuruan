<?php 
//mengaktifkan session
session_start();
//menghubungkan php dengan koneksi database
include 'koneksi.php';
//menangkap data yang dikirim dari from ogin
$username = $_POST['username'];
$password = $_POST['password'];
//menyelelsi data user
$login = mysqli_query($dbconnect,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	//cek jika si user nio login sebagai admin
	if ($data['level']=="admin") {
		//buatsession login dan username
		$_SESSION['username']=$username;
		$_SESSION['level']="admin";
		//alihkan ke halaman dasboard operator
		header ("location:admin/home.php");
	}
	//cek jika user login sebagai operator
	else if ($data['level']=="operator") {
		//buatsession login dan username
		$_SESSION['username']=$username;
		$_SESSION['level']="operator";
		//alihkan ke halaman dasboard operator
		header ("location:operator/operator.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
	}else{
	header("location:index.php?pesan=gagal");
	}
?>