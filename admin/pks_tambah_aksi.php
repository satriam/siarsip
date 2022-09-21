<?php 
include '../koneksi.php';


$id= $_POST['id_diri'];
$akhir = $_POST['akhir_pks'];
$mulai1 = $_POST['mulai1'];
$mulai2 = $_POST['mulai2'];
$mulai3 = $_POST['mulai3'];
$mulai4 = $_POST['mulai4'];
$akhir1 = $_POST['akhir1'];
$akhir2 = $_POST['akhir2'];
$akhir3 = $_POST['akhir3'];
$akhir4 = $_POST['akhir4'];

$cek=mysqli_query($koneksi, "insert into pks values (NULL,'$id','$mulai1','$mulai2','$mulai3','$mulai4','$akhir1','$akhir2','$akhir3','$akhir4','$akhir')");

mysqli_query($koneksi,"update diri set status=1 where id='$id'");

header("location:pks.php");