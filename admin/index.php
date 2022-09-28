<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs">
                    <h3 class="box-title">Admin</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-success">
                                <?php 
                                $jumlah_petugas = mysqli_query($koneksi,"select * from admin");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_petugas); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Total Karyawan</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-info">
                                <?php 
                                $jumlah_arsip = mysqli_query($koneksi,"select * from diri");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
       



                    <?php
 // skrip koneksi database
//  mysql_connect("localhost","root","");
//  mysql_select_db("siarsip");
 
 $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
 $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
 $waktu   = time(); //
  
 // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
 $s = mysqli_query($koneksi,"SELECT * FROM tstatistika WHERE ip='$ip' AND tanggal='$tanggal'");
 
 // Kalau belum ada, simpan data user tersebut ke database
 if(mysqli_num_rows($s) == 0){
     mysqli_query($koneksi,"INSERT INTO tstatistika(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
 }
 // Jika sudah ada, update
 else{
     mysqli_query($koneksi,"UPDATE tstatistika SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
 }
 
 $pengunjung       = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tstatistika WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
 $hitung  = mysqli_query($koneksi,"SELECT COUNT(hits) FROM tstatistika"); // hitung total pengunjung
 $totalpengunjung  = mysqli_free_result($hitung); // hitung total pengunjung
 $bataswaktu       = time() - 300;
 $pengunjungonline = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tstatistika WHERE online > '$bataswaktu'")); // hitung pengunjung online
 ?> 
 

     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> 
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Pengunjung Hari ini</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn">
                            <i class="fa fa-level-down" aria-hidden="true"></i> 
                            <span class="text-danger">
                               
                                <span class="counter"><?php echo $pengunjung; ?> </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
</div>
    







<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <!-- <span class="caption-subject"><b>Grafik pengunduhan arsip</b></span> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <!-- <p>Grafik jumlah unduh arsip perhari selama sebulan</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <!-- <h5><i class="fa fa-circle" style="color: #006DF0;"><?php echo $totalpengunjung; ?></i>Jumlah Unduhan</h5> -->
                        </li>
                    </ul>
                    <div id="extra-area-chart" style="height: 356px;"></div>

                    <div id="morris-area-chart"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from admin where admin_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">

                            <img src="../assets/img/product/3.png" alt="">
                        </a>
                    </div>

                    <div class="single-product-text">
                        <?php 
                        if($s['admin_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/admin/<?php echo $s['admin_foto']; ?>">
                            <?php
                        }
                        ?>

                        <h4><a class="cards-hd-dn" href="#"><?php echo $s['admin_nama']; ?></a></h4>
                        <h5>Admin</h5>
                        <p class="ctn-cards">Pengelolaan arsip jadi lebih mudah dengan sistem informasi arsip digital.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>