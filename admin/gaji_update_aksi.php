<?php 
include '../koneksi.php';


$id= $_POST['id'];
$idd=$_POST['id_diri'];
$gaji = $_POST['gaji'];
$tanggal = $_POST['tanggal'];



$cek=mysqli_query($koneksi, "update gaji set gaji='$gaji',tanggal='$tanggal',id_diri='$idd' where id='$id'");



header("location:gaji.php");