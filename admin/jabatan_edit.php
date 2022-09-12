<?php include 'header.php'; ?>


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Jabatan</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Jabatan</span></li>
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
                    <h3 class="panel-title">Edit Jabatan</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">            
                        <a href="jabatan.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                   <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from jabatan where Kode_Jabatan='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <form method="post" action="jabatan_update.php">
                        <input type="hidden" name="Id" value="<?php echo $d['Kode_Jabatan']; ?>">
                            
                            <div class="form-group">
                                <label>Kode Jabatan</label>
                                <input type="text" class="form-control" ReadOnly name="Kode_Jabatan" required="required" value="<?php echo $d['Kode_Jabatan']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="Nama_Jabatan" required="required" value="<?php echo $d['Nama_Jabatan']; ?>">
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