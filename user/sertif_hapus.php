<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from sertifikat where id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['gambar'];
unlink("../gambar/sertif/$foto");
mysqli_query($koneksi, "delete from sertifikat where id='$id'");
header("location:arsip.php");
