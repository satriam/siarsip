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
                        <a href="arsip.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from sertifikat where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                    <form method="post" action="sertif_edit_aksi.php" enctype="multipart/form-data">
                        <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            </div>

                       <div class="form-group">
                                <label>Nama Sertifikat</label>
                                <input type="text" class="form-control"  name="nama_sertif" value="<?php echo $d['nama_sertif']; ?>" required="required" >
                            </div>

                            
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" required="required">
                            
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