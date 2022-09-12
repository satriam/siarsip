<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Tambah User</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">User</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row  ">
        <div class="col-lg-12 ">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Tambah User</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="dt_user.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>
                    
                    <form method="post" action="dt_user_aksi.php">
                        <div class="row">
                            
                            </div>
                            <div class=" col-lg-6 form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama" required="required" >
                            </div>
                            
                            <div class="col-lg-2 form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="masukkan tempat lahir" name="tempat_lahir" required="required">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" required="required">
                            </div>
                            <div class="col-lg-12 form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email" name="email" required="required">
                                
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>golongan darah</label> <br>
                                <select name="goldar"  class="form-control">
                                    <option disabled selected> Pilih </option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                                
                                </select>
                            </div>
                            
                            <div class="col-lg-6 form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="nip" required="required"placeholder="Masukkan NIP" >
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik" required="required">
                            </div>
                            
                            <div class="col-lg-6 form-group">
                                <label>NPWP</label>
                                <input type="text" class="form-control" name="npwp"placeholder="Masukkan NPWP" >
                            </div>

                            <div class="col-lg-12 form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" required="required" >
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Status Kawin</label>
                                <select name="status_kawin"  class="form-control">
                                <option disabled selected> Pilih </option>
                                <option value="belum kawin">belum kawin</option>
                                <option value="sudah kawin">sudah kawin</option>
                                
                                </select>
                            </div>
                            
                            <div class="col-lg-6 form-group">
                                <label>BPJS</label>
                                <input type="text" class="form-control" name="bpjs" placeholder="Masukkan BPJS">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>JABATAN</label>
                             <select name="id_jabatan" class="form-control">
                             <option disabled selected> Pilih </option>
                                <?php
                                 include '../koneksi.php'; 
                                $sql=mysqli_query($koneksi,"SELECT * FROM jabatan");
                                while ($data=mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?=$data['Kode_Jabatan']?>"><?=$data['Nama_Jabatan']?></option> 
                                <?php
                                }
                                ?>
                                </select>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>JENJANG</label>
                             <select name="id_jj" class="form-control">
                             <option disabled selected> Pilih </option>
                                <?php
                                 include '../koneksi.php'; 
                                $sql=mysqli_query($koneksi,"SELECT * FROM jenjang");
                                while ($data=mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?=$data['id']?>"><?=$data['jenjang']?></option> 
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                             <div class="col-lg-12 form-group">
                                <label>LOKASI</label>
                             <select name="id_lokasi" class="form-control">
                             <option disabled selected> Pilih </option>
                                <?php
                                 include '../koneksi.php'; 
                                $sql=mysqli_query($koneksi,"SELECT * FROM lokasi");
                                while ($data=mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?=$data['id']?>"><?=$data['Nama_Lokasi']?></option> 
                                <?php
                                }
                                ?>
                                </select>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label>Nakes/Non Nakes</label> <br>
                                <select name="nakes"  class="form-control">
                                    <option disabled selected> Pilih </option>
                                <option value="non nakes">Non Nakes</option>
                                <option value="nakes">Nakes</option>
                                </select>
                            </div>
                            
                            <div class="col-lg-4 form-group">
                                <label>Jenis Jabatan</label> <br>
                                <select name="jenis_jabatan"  class="form-control">
                                    <option disabled selected> Pilih </option>
                                <option value="Struktural">Struktural</option>
                                <option value="Fungsional">Fungsional</option>
                                </select>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label>Status Kerja</label>
                             <select name="id_status" class="form-control">
                             <option disabled selected> Pilih </option>
                                <?php
                                 include '../koneksi.php'; 
                                $sql=mysqli_query($koneksi,"SELECT * FROM status");
                                while ($data=mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?=$data['id']?>"><?=$data['status']?></option> 
                                <?php
                                }
                                ?>
                                </select>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Telpon 1</label>
                                <input type="text" class="form-control" name="telpon1" required="required" placeholder="Masukkan Telepon 1">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Telpon 2</label>
                                <input type="text" class="form-control" name="telpon2" required="required" placeholder="Masukkan Telepon 2 / Darurat" >
                            </div>

                            <div class="col-lg-12 form-group">
                                <label>Universitas</label>
                                <input type="text" class="form-control" name="univ" required="required" placeholder="Masukkan Universitas">
                            </div>

                             <div class="col-lg-6 form-group">
                                <label>Serata</label>
                               <select name="serata"  class="form-control">
                                <option disabled selected> Pilih </option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">Serata 1</option>
                                <option value="S2">Serata 2</option>
                                <option value="S3">Serata 3</option>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" required="required" placeholder="Masukkan Jurusan">
                            </div>
                            
                           

                            <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>

                        </form>

                    

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>