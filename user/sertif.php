<?php include 'header.php'; ?>

<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcome-heading">
                <h4 style="margin-bottom: 0px">Profile</h4>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <ul class="breadcome-menu" style="padding-top: 0px">
                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                <li><span class="bread-blod">Data diri</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid">
  <div class="panel panel">
    <div class="panel-heading">
      <h3 class="panel-title">Detail Sertifikat</h3>
    </div>

    <div class="panel-body">
      <div class="pull-right">
        <a href="arsip.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> kembali</a>
        <br><br>
      </div>
      <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select *from sertifikat where id='$id'"); 
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        
                                            <?php 
                                            if($d['gambar'] == ""){
                                                ?>
                                            <img class="img img-responsive"  src="../gambar/sistem/user.png">
                                            <?php
                                            }else{
                                                ?>
                                            <img class="img img-responsive"   src="../gambar/sertif/<?php echo $d['gambar']; ?>">
                                            <?php
                                            }
                                            ?>
                    <?php
                    }
                    ?>
      
    </div>
  </div>
</div>






