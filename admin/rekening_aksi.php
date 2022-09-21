<?php 
include '../koneksi.php'; 
$id=$_POST['id_diri'];
$bank  = $_POST['Bank'];
$rekening = $_POST['Rekening'];

$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM rekening WHERE id_diri='$id' && bank='$bank' && rekening='$rekening' "));
 
    if ($cek > 0){
    echo "<script>window.alert('Rekening yang anda masukan sudah ada')
    window.location='rekening_tambah.php'</script>";
    }else {

$data=mysqli_query($koneksi, "insert into rekening values (NULL,'$id','$bank','$rekening')");


header("location:rekening_karyawan.php");
    }