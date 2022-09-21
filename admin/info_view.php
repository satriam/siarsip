<?php include 'header.php'; ?>
<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcome-heading">
                <h4 style="margin-bottom: 0px">Data Karyawan</h4>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <ul class="breadcome-menu" style="padding-top: 0px">
                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                <li><span class="bread-blod">Karyawan</span></li>
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
      <h3 class="panel-title">Data Karyawan</h3>
    </div>
      <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select *from info where id='$id'"); 
                    while($d = mysqli_fetch_array($data)){
                        ?>
    <div class="panel-body">
      <div class="col-md-3">
                    </div>
      <div class="col-md-6">
                                <!-- komponen panel di sini  -->
                                <div class="panel panel-default" >
                                    <div class="panel-heading post-thumb ">
                                       <?php 
                                            if($d['gambar'] == ""){
                                                ?>
                                            <img class="img img-responsive" src="../gambar/sistem/user.png">
                                            <?php
                                            }else{
                                                ?>
                                            <img class="img img-responsive" src="../gambar/info/<?php echo $d['gambar']; ?>">
                                            <?php
                                            }
                                            ?>
                                    </div>

                                    <div class="panel-body post-body">
                                        <a class="label label-default" href="#"><?php echo $d['tipe']; ?></a>
                                        <h3 class="post-title">
                                            <a href="#"><?php 
                                             $judul = $d["judul"];
                                            echo $judul; ?></a>
                                        </h3>
                                        <p>
                                            <?php 
                                            $deskripsi = $d["isi"];
                                            
                                            echo $deskripsi; ?>
                                        </p>
                                        <hr>
                                        <p>
                                            <b>Tanggal :</b>
                                            <?php 
                                            $deskripsi = $d["tanggal_acara"];
                                            
                                            echo $deskripsi; ?>
                                        </p>
                                        <p>
                                            <b>Lokasi :</b>
                                            <?php 
                                            $deskripsi = $d["lokasi"];
                                            
                                            echo $deskripsi; ?>
                                        </p>
                                        <hr>
                                        <div class="post-author ">
                                            <p style="text-align:right; color:red;"><?php echo $d['author']; ?> <?php echo $d['created_at']; ?></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                                       
                         
        </div> 
  
     
                            
          <div class="pull-right">
        <a href="info.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
      </div>

        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>
<?php 
                    }
                    ?>

