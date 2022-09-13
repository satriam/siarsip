<?php 
include '../koneksi.php';
$judul  = $_POST['judul'];
$isi  = $_POST['isi'];
$tipe  = $_POST['tipe'];
// $foto  = $_POST['foto'];
$author  = $_POST['author'];
$tanggal = date("Y-m-d");

$rand = rand();

$allowed =  array('gif','png','jpg','jpeg');

$filename = $_FILES['foto']['name'];

if($filename == ""){

	mysqli_query($koneksi, "insert into info values (NULL,'$judul','$isi',NULL,'$tipe','$tanggal','$author')")or die(mysqli_error($koneksi));
    mysqli_query($koneksi, "insert into notif values (NULL,'Memposting','$tanggal','$author','informasi $tipe')")or die(mysqli_error($koneksi));
	// header("location:profil.php?alert=sukses");
    header("location:info.php");

}else{

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {
        	// upload file baru
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/info/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into info values (NULL,'$judul','$isi','$nama_file','$tipe','$tanggal','$author')")or die(mysqli_error($koneksi));
        mysqli_query($koneksi, "insert into notif values (NULL,'Memposting','$tanggal','$author','informasi $tipe')")or die(mysqli_error($koneksi));
		// header("location:profil.php?alert=sukses");
        header("location:info.php");

	}else{

		header("location:info.php");
	}

}

