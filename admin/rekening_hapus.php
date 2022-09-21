<?php 
include '../koneksi.php';
$Id = $_GET['id'];

// $data = mysqli_query($koneksi, "select * from jabatan where Id='$Id'");
mysqli_query($koneksi, "delete from rekening where id='$Id'");
header("location:rekening_karyawan.php");
