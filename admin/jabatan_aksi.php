<?php 
include '../koneksi.php';


$Kode_Jabatan = $_POST['Kode_Jabatan'];
$Nama_Jabatan = $_POST['Nama_Jabatan'];

mysqli_query($koneksi, "insert into jabatan values ('$Kode_Jabatan','$Nama_Jabatan')");
header("location:jabatan.php");