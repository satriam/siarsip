<?php 
include '../koneksi.php'; 
$id=$_POST['id_diri'];
$bank  = $_POST['Bank'];
$rekening = $_POST['Rekening'];


$data=mysqli_query($koneksi, "insert into rekening values (NULL,'$id','$bank','$rekening')");


header("location:arsip.php");