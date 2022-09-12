<?php include 'header.php'; ?>


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Status</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Status</span></li>
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
                    <h3 class="panel-title">Edit Status</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">            
                        <a href="status.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                   <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from status where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <form method="post" action="status_update.php">
                        <input type="hidden" name="Id" value="<?php echo $d['id']; ?>">
                            
                            <div class="form-group">
                                <label>Kode Status</label>
                                <input type="text" class="form-control" ReadOnly name="id" required="required" value="<?php echo $d['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label>status</label>
                                <input type="text" class="form-control" name="status" required="required" value="<?php echo $d['status']; ?>">
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