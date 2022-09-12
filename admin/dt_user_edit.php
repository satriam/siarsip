<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit User</h4>
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
        <div class="col-lg-6 ">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Edit User</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="dt_user.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from diri where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                    <form method="post" action="dt_user_update.php">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" class="form-control" name="nama" required="required"
                                value="<?php echo $d['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="masukkan tempat lahir"
                                name="tempat_lahir" required="required"value="<?php echo $d['tempat_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required="required" value="<?php echo $d['tanggal_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label>golongan darah</label> <br>
                            <?php 
                                if($d['goldar']=='O'){
                               echo'
                               <input type="radio"  class="form-group-input" name="goldar" value="o" required="required" checked>O <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="ab" required="required" >AB <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="a" required="required" >A <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="b" required="required" >B';
                            }   else if($d['goldar']=='AB'){
                               echo'
                               <input type="radio"  class="form-group-input" name="goldar" value="o" required="required">O <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="ab" required="required" checked >AB <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="a" required="required" >A <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="b" required="required" >B';
                            }   else if($d['goldar']=='A'){
                               echo'
                               <input type="radio"  class="form-group-input" name="goldar" value="o" required="required">O <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="ab" required="required" >AB <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="a" required="required" checked>A <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="b" required="required" >B';
                            }   else if($d['goldar']=='B'){
                               echo'
                               <input type="radio"  class="form-group-input" name="goldar" value="o" required="required" >O <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="ab" required="required" >AB <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="a" required="required" >A <br>
                               <input type="radio"  class="form-group-input" name="goldar" value="b" required="required" checked>B';
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" required="required"
                                value="<?php echo $d['nik']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Status Kawin</label> <br>
                            <?php 
                                if($d['status_kawin']=='belum kawin'){
                               echo'
                               <input type="radio"  class="form-group-input" name="status_kawin" value="belum kawin" required="required" checked>belum kawin <br>
                               <input type="radio"  class="form-group-input" name="status_kawin" value="sudah kawin" required="required" >sudah kawin';
                            }   else if($d['status_kawin']=='sudah kawin'){
                               echo'
                              <input type="radio"  class="form-group-input" name="status_kawin" value="belum kawin" required="required">belum kawin <br>
                               <input type="radio"  class="form-group-input" name="status_kawin" value="sudah kawin" required="required" checked >sudah kawin';
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" required="required"
                                value="<?php echo $d['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required="required"
                                value="<?php echo $d['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>NPWP</label>
                            <input type="text" class="form-control" name="npwp" value="<?php echo $d['npwp']; ?>">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" required="required"
                                value="<?php echo $d['nip']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telpon 1</label>
                            <input type="text" class="form-control" name="telpon1" required="required"
                                value="<?php echo $d['telpon1']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telpon 2</label>
                            <input type="text" class="form-control" name="telpon2" required="required"
                                value="<?php echo $d['telpon2']; ?>">
                        </div>
                        <div class="form-group">
                            <label>BPJS</label>
                            <input type="text" class="form-control" name="bpjs" value="<?php echo $d['bpjs']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Serata</label>
                            <input type="text" class="form-control" name="serata" required="required"
                                value="<?php echo $d['serata']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" required="required"
                                value="<?php echo $d['jurusan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Universitas</label>
                            <input type="text" class="form-control" name="univ" required="required"
                                value="<?php echo $d['univ']; ?>">
                        </div>


                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>

                    </form>

                    <?php 
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>