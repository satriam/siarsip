<?php 
include '../koneksi.php';
$id = $_GET['id'];

// $data = mysqli_query($koneksi, "select * from diri where id='$id'");
mysqli_query($koneksi, "delete from diri where id='$id'");
header("location:dt_user.php");
