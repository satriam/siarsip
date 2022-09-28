<?php 
include '../koneksi.php';
$Id = $_GET['id'];
$Idd = $_GET['idd'];

// $data = mysqli_query($koneksi, "select * from jabatan where Id='$Id'");
mysqli_query($koneksi, "delete from pks where id='$Id'");
$data=mysqli_query($koneksi, " update diri set status='0' where id='$Idd'");

header("location:pks.php");