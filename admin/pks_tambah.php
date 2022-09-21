<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Tambah Pks</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Pks</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="pks.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                    <form method="post" action="pks_tambah_aksi.php" >

                       <div class=" form-group">
                            <label>Nama</label>
                            <select name="id_diri" class="form-control">
                                <option disabled selected> Pilih </option>
                                <?php
                                 include '../koneksi.php'; 
                                $sql=mysqli_query($koneksi,"SELECT * FROM diri WHERE status='0'");
                               
                                while ($data=mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                         <div class="form-group">
                                <label>Akhir PKS</label></label>
                                <input type="date" class="form-control"  name="akhir_pks" required="required">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 1</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai1" required="required">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir1" required="required">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 2</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai2" required="required">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir2" required="required">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 3</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai3" required="required">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir3" required="required">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 4</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai4" required="required">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir4" required="required">
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