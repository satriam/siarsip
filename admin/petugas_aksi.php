<?php 
include '../koneksi.php';
$nama  = $_POST['admin_nama'];
$username = $_POST['admin_username'];
$password = md5($_POST['admin_password']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['admin_foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "insert into admin values (NULL,'$nama','$username','$password','')");
	header("location:petugas.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:petugas.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/petugas/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into admin values (NULL,'$nama','$username','$password','$file_gambar')");
		header("location:petugas.php");
	}
}

