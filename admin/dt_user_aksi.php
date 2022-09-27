<?php 
include '../koneksi.php'; 
$nama  = $_POST['nama'];
$password = md5($_POST['nip']);
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$goldar = $_POST['goldar'];
$nik = $_POST['nik'];
$status = $_POST['status_kawin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$npwp = $_POST['npwp'];
$nip= $_POST['nip'];
$telpon1 = $_POST['telpon1'];
$telpon2 = $_POST['telpon2'];
$bpjs = $_POST['bpjs'];
$serata = $_POST['serata'];
$jurusan = $_POST['jurusan'];
$univ = $_POST['univ'];
$id_jabatan = $_POST['id_jabatan'];
$id_lokasi = $_POST['id_lokasi'];
$id_status = $_POST['id_status'];
$id_jj = $_POST['id_jj'];
$nakes = $_POST['nakes'];
$jenis_jabatan= $_POST['jenis_jabatan'];

 $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM diri WHERE nip='$nip' "));
 
    if ($cek > 0){
    echo "<script>window.alert('NIP yang anda masukan sudah ada')
    window.location='dt_user_tambah.php'</script>";
    }else {

$data=mysqli_query($koneksi, "insert into diri values (NULL,'$nip','$password','$nama','$tempat','$tanggal','$goldar','$nik','$status','$alamat'
,'$email','$npwp','$nip','$telpon1','$telpon2','$bpjs','$serata','$jurusan','$univ','$id_lokasi','$id_status','$id_jabatan','$id_jj','$nakes','$jenis_jabatan','','0')");

    echo "<script>window.alert('Berhasil Menambahkan Data')
    window.location='dt_user.php'</script>";

    }