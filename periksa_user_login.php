<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM diri WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);
// var_dump($cek);die;

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['id'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['status'] = "user_login";

	header("location:user/");
}else{
	header("location:user_login.php?alert=gagal");
}

