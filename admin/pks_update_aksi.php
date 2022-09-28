<?php 
include '../koneksi.php';


$id= $_POST['id'];
$idd=$_POST['id_diri'];
$akhir = $_POST['akhir_pks'];
$mulai1 = $_POST['mulai1'];
$mulai2 = $_POST['mulai2'];
$mulai3 = $_POST['mulai3'];
$mulai4 = $_POST['mulai4'];
$akhir1 = $_POST['akhir1'];
$akhir2 = $_POST['akhir2'];
$akhir3 = $_POST['akhir3'];
$akhir4 = $_POST['akhir4'];


$cek=mysqli_query($koneksi, "update pks set mulai1='$mulai1',mulai2='$mulai2',mulai3='$mulai3',mulai4='$mulai4',akhir1='$akhir1',akhir2='$akhir2',akhir3='$akhir3',akhir4='$akhir4',akhir_pks='$akhir',id_diri='$idd' where id='$id'");



header("location:pks.php");