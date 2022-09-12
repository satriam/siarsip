<?php 
include '../koneksi.php';
$Id  = $_POST['id'];
$Nama_Lokasi = $_POST['Nama_Lokasi'];

mysqli_query($koneksi, "update lokasi set Nama_Lokasi='$Nama_Lokasi' where id='$Id'");
header("location:lokasi.php");
