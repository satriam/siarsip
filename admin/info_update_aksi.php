<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$judul  = $_POST['judul'];
$isi  = $_POST['isi'];
$tipe  = $_POST['tipe'];
// $foto  = $_POST['foto'];
$author  = $_POST['author'];
$tanggal = date("Y-m-d");
$tanggal_acara=$_POST['tanggal_acara'];
$lokasi=$_POST['lokasi'];


$rand = rand();

$allowed =  array('gif','png','jpg','jpeg');

$filename = $_FILES['foto']['name'];

if( $filename == "" && $tipe == ""){

	mysqli_query($koneksi, "update info set judul='$judul', isi='$isi',tanggal_acara='$tanggal_acara',lokasi='$lokasi' where id='$id'")or die(mysqli_error($koneksi));
	header("location:info.php");

}else if($filename == ""){

	mysqli_query($koneksi, "update info set judul='$judul', tipe='$tipe', isi='$isi',tanggal_acara='$tanggal_acara',lokasi='$lokasi' where id='$id'")or die(mysqli_error($koneksi));
	header("location:info.php");
}else if($tipe == ""){

	
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {

		// hapus file lama
		$lama = mysqli_query($koneksi,"select * from info where id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['gambar'];
		unlink("../gambar/info/".$nama_file_lama);

		// upload file baru
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/info/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "update info set judul='$judul',gambar='$nama_file', isi='$isi',tanggal_acara='$tanggal_acara',lokasi='$lokasi' where id='$id'")or die(mysqli_error($koneksi));
		header("location:info.php?alert=sukses");

	}else{

		header("location:info.php?alert=gagal");
	}
} else{

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {

		// hapus file lama
		$lama = mysqli_query($koneksi,"select * from info where id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['gambar'];
		unlink("../gambar/info/".$nama_file_lama);

		// upload file baru
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/info/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "update info set judul='$judul',gambar='$nama_file', tipe='$tipe', isi='$isi',tanggal_acara='$tanggal_acara',lokasi='$lokasi' where id='$id'")or die(mysqli_error($koneksi));
		header("location:info.php?alert=sukses");

	}else{

		header("location:info.php?alert=gagal");
	}

}

