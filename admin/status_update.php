<?php 
include '../koneksi.php';
$Id  = $_POST['Id'];

// $Kode_Jabatan = $_POST['id'];
$status = $_POST['status'];

mysqli_query($koneksi, "update status set status='$status' where id='$Id'");
header("location:status.php");
