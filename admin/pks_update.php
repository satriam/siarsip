<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Update PKS</h4>
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
                    <h3 class="panel-title">Update PKS</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="pks.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                     <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select pks.id,diri.id as id_diri,diri.nama,pks.akhir_pks,pks.mulai1,pks.mulai2,pks.mulai3,pks.mulai4,pks.akhir1,pks.akhir2,pks.akhir3,pks.akhir4 from pks INNER JOIN diri ON pks.id_diri = diri.id where pks.id='$id' ");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                    <form method="post" action="pks_update_aksi.php" >
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="hidden" name="id_diri" value="<?php echo $d['id_diri']; ?>">
                       <div class=" form-group">
                            <label>Nama</label>
                                <input type="text" class="form-control" value="<?php echo $d['nama'];?>" readonly>

                        </div>

                         <div class="form-group">
                                <label>Akhir PKS</label></label>
                                <input type="date" class="form-control"  name="akhir_pks" required="required"  value="<?php echo $d['akhir_pks']; ?>">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 1</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai1" required="required" value="<?php echo $d['mulai1']; ?>">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir1" required="required" value="<?php echo $d['akhir1']; ?>">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 2</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai2" required="required" value="<?php echo $d['mulai2']; ?>">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir2" required="required" value="<?php echo $d['akhir2']; ?>">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 3</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai3" required="required" value="<?php echo $d['mulai3']; ?>">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir3" required="required" value="<?php echo $d['akhir3']; ?>">
                            </div>
                            <hr>
                            <p><b>PKS TAHAP 4</b></p>
                         <div class="form-group">
                                <label>Mulai</label></label>
                                <input type="date" class="form-control"  name="mulai4" required="required" value="<?php echo $d['mulai4']; ?>">
                            </div>
                         <div class="form-group">
                                <label>Akhir</label></label>
                                <input type="date" class="form-control"  name="akhir4" required="required" value="<?php echo $d['akhir4']; ?>">
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