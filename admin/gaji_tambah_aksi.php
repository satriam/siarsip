<?php 
include '../koneksi.php';



$idd=$_POST['id_diri'];
$gaji = $_POST['gaji'];
$tanggal = $_POST['tanggal'];

$cek=mysqli_query($koneksi, "insert into gaji values (NULL,'$idd','$tanggal','$gaji')");


header("location:gaji.php");