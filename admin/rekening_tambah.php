<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Tambah Rekening</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Rekening</span></li>
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
                    <h3 class="panel-title">Tambah Rekening</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="arsip.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <form method="post" action="rekening_aksi.php">

                       <div class="form-group">
                            <label>Nama Karyawan</label>
                            <select name="id_diri" class="form-control" required="required">
                                <option disabled selected> Pilih </option>
                                <?php
                                 include '../koneksi.php'; 
                                $sql=mysqli_query($koneksi,"SELECT * FROM diri");
                                while ($data=mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                           <div class="form-group">
                            <label>Nama Bank</label>
                            <select name="Bank" class="form-control" required="required">
                                <option disabled selected> Pilih </option>
                                <option value="Mandiri">Bank Mandiri</option>
                                <option value="BCA">Bank Central Asia (BCA)</option>
                                <option value="Sumselbabel">Bank Sumselbabel</option>
                                <option value="BNI">Bank Negara Indonesia (BNI)</option>
                                <option value="BSI">Bank Syariah Indonesia (BSI)</option></option>
                                <option value="BRI">Bank Rakyat Indonesia (BRI)</option>
                                <option value="Bukopin">Bank Bukopin</option>
                                <option value="Jenius">Jenius</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>NO Rekening</label>
                            <input type="number" class="form-control" name="Rekening" placeholder="Masukkan rekening" required="required">
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