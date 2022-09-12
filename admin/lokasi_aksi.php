<?php 
include '../koneksi.php';



$Nama_Lokasi = $_POST['Nama_Lokasi'];

$d=mysqli_query($koneksi, "insert into lokasi values (NULL,'$Nama_Lokasi')");

header("location:lokasi.php");