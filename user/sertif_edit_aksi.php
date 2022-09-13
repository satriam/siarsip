<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$judul  = $_POST['nama_sertif'];



$rand = rand();

$allowed =  array('gif','png','jpg','jpeg');

$filename = $_FILES['foto']['name'];

if($filename == ""){

	mysqli_query($koneksi, "update sertifikat set nama_sertif='$judul' where id='$id'")or die(mysqli_error($koneksi));
	header("location:arsip.php");
} else{

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {

		// hapus file lama
		$lama = mysqli_query($koneksi,"select * from sertifikat where id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['gambar'];
		unlink("../gambar/sertif/".$nama_file_lama);

		// upload file baru
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/sertif/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "update sertifikat set nama_sertif='$judul',gambar='$nama_file'where id='$id'")or die(mysqli_error($koneksi));
		header("location:arsip.php");

	}else{

		header("location:arsip.php");
	}

}

