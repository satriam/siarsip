<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Tambah Info</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Info</span></li>
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
                    <h3 class="panel-title">Tambah Info</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="info.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <form method="post" action="info_tambah_aksi.php" enctype="multipart/form-data">

                       <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control"  name="judul" required="required" >
                            </div>

                            <div class="form-group">
                                <label>isi</label>
                                <textarea class="form-control" rows="7" cols="70" name="isi" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Acara</label></label>
                                <input type="date" class="form-control"  name="tanggal_acara" required="required">
                            </div>
                            <div class="form-group">
                                <label>Lokasi Acara</label>
                                <input type="text" class="form-control"  name="lokasi" required="required"></input>
                            </div>

                            <div class="form-group">
                            <label>tipe</label>
                            <select name="tipe" class="form-control">
                                <option disabled selected> Pilih </option>
                                <option value="Seminar">Seminar</option>
                                <option value="Rapat">Rapat</option>
                                <option value="Upacara">Upacara</option>
                                <option value="Berita">Berita</option>
                                <option value="Acara">Acara</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto">
                            <small>Kosongkan jika tidak ingin menambahkan foto.</small>
                        </div>

                        <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control"  name="author" value="<?php echo $_SESSION['nama'];?>" readonly >
                                
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