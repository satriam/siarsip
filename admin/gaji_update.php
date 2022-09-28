<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Update Gaji</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Gaji</span></li>
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
                    <h3 class="panel-title">Update Gaji</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="gaji.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>

                    <br>
                    <br>

                     <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select gaji.id,diri.id as id_diri,diri.nama,gaji.gaji,gaji.tanggal from gaji INNER JOIN diri ON gaji.id_diri = diri.id where gaji.id='$id' ");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                    <form method="post" action="gaji_update_aksi.php" >
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="hidden" name="id_diri" value="<?php echo $d['id_diri']; ?>">
                       <div class=" form-group">
                            <label>Nama</label>
                                <input type="text" class="form-control" value="<?php echo $d['nama'];?>" readonly>

                        </div>
                       <div class=" form-group">
                            <label>Gaji</label>
                                <input type="number" name="gaji" class="form-control" value="<?php echo $d['gaji'];?>" >

                        </div>

                         <div class="form-group">
                                <label>tanggal</label></label>
                                <input type="date" class="form-control"  name="tanggal" required="required"  value="<?php echo $d['tanggal']; ?>">
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