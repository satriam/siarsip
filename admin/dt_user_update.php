<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$goldar = $_POST['goldar'];
$nik = $_POST['nik'];
$status = $_POST['status_kawin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$npwp = $_POST['npwp'];
$nip=$_POST['nip'];
$telpon1 = $_POST['telpon1'];
$telpon2 = $_POST['telpon2'];
$bpjs = $_POST['bpjs'];
$serata = $_POST['serata'];
$jurusan = $_POST['jurusan'];
$univ = $_POST['univ'];

mysqli_query($koneksi, "update diri set nama='$nama', tempat_lahir='$tempat',tanggal_lahir='$tanggal',goldar='$goldar',nik='$nik',status_kawin='$status',alamat='$alamat',email='$email',npwp='$npwp',nip='$nip', telpon1='$telpon1',telpon2='$telpon2',bpjs='$bpjs',serata='$serata',jurusan='$jurusan',univ='$univ' where id='$id'");
header("location:dt_user.php");
