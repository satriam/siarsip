
<?php 
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "select * from info where id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['gambar'];
unlink("../gambar/info/$foto");
mysqli_query($koneksi, "delete from info where id='$id'");
header("location:info.php");
?>
