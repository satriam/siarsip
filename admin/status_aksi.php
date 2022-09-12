<?php 
include '../koneksi.php';

$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($koneksi, "insert into status values ('$id','$status')");
header("location:status.php");