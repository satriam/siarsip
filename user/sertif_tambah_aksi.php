<?php 
include '../koneksi.php';

$nama  = $_POST['nama_sertif'];
$id=$_POST['id_diri'];
$nama=$_POST['nama'];

$rand = rand();
$tanggal = date("Y-m-d");

$allowed =  array('gif','png','jpg','jpeg');

$filename = $_FILES['foto']['name'];
//  $kategori = mysqli_query($koneksi,"SELECT nama FROM diri where diri.id='$id'");
//  var_dump($kategori);die;



	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {
        	// upload file baru
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/sertif/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into sertifikat values (NULL,'$nama','$nama_file','$id')")or die(mysqli_error($koneksi));
        mysqli_query($koneksi, "insert into notif values (NULL,'Upload','$tanggal','$nama','Sertifikat','admin')")or die(mysqli_error($koneksi));
		// header("location:profil.php?alert=sukses");
        header("location:arsip.php");

	}else{

		header("location:arsip.php");
	}

