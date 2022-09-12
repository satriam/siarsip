<?php 
include '../koneksi.php';
$Id  = $_POST['Id'];

$Kode_Jabatan = $_POST['Kode_Jabatan'];
$Nama_Jabatan = $_POST['Nama_Jabatan'];

mysqli_query($koneksi, "update jabatan set Nama_Jabatan='$Nama_Jabatan' where Kode_Jabatan='$Id'");
header("location:jabatan.php");
