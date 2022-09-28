<?php 
include '../koneksi.php';
$id  = $_POST['admin_id'];
$nama  = $_POST['admin_nama'];
$username = $_POST['admin_username'];
$pwd = $_POST['admin_password'];
$password = md5($_POST['admin_password']);

// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['admin_foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
	mysqli_query($koneksi, "update admin set admin_nama='$nama', admin_username='$username' where admin_id='$id'");
	header("location:petugas.php");
}elseif($pwd==""){
	if(!in_array($ext,$allowed) ) {
		header("location:petugas.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/petugas/'.$rand.'_'.$filename);
		$x = $rand.'_'.$filename;
		mysqli_query($koneksi, "update admin set admin_nama='$nama', admin_username='$username', admin_foto='$x' where admin_id='$id'");		
		header("location:petugas.php?alert=berhasil");
	}
}elseif($filename==""){
	mysqli_query($koneksi, "update admin set admin_nama='$nama', admin_username='$username', admin_password='$password' where admin_id='$id'");
	header("location:petugas.php");
}

