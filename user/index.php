<?php include 'header.php'; ?>
<?php
    //Simpan Data Statistik Website
    $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
    $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
    $waktu   = time(); // 
    // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
    $s = mysqli_query($koneksi,"SELECT * FROM tstatistika WHERE ip='$ip' AND tanggal='$tanggal'");
    // Kalau belum ada, simpan data user tersebut ke database
    if(mysqli_num_rows($s) == 0){
    mysqli_query($koneksi,"INSERT INTO tstatistika (ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
    } 
    else{
    mysqli_query($koneksi,"UPDATE tstatistika SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
    }
?>

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

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Total Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                    <span class="counter text-info">
                                        <?php 
                                        $jumlah_arsip = mysqli_query($koneksi,"select * from arsip");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Kategori Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right graph-four-ctn">
                                    <i class="fa fa-level-down" aria-hidden="true"></i>
                                    <span class="text-danger">
                                        <?php 
                                        $jumlah_kategori = mysqli_query($koneksi,"select * from kategori");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_kategori); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

        
                <div class="product-sales-chart">

                    <div class="container-fluid">

                    <h1 class="text-center" ><u> Berita Acara </u></h1>
                        <div class="row col-lg-12">
         <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $kategori = mysqli_query($koneksi,"SELECT * FROM info");
                    while($s = mysqli_fetch_array($kategori)){
                        ?>
                            <div class="col-lg-4">
                                <!-- komponen panel di sini  -->
                                <div class="panel panel-default" >
                                    
                                    <div class="panel-heading post-thumb">
                                       <?php 
                                            if($s['gambar'] == ""){
                                                ?>
                                            <img class="img img-responsive" src="../gambar/sistem/user.png">
                                            <?php
                                            }else{
                                                ?>
                                            <img class="img img-responsive" src="../gambar/info/<?php echo $s['gambar']; ?>">
                                            <?php
                                            }
                                            ?>
                                    </div>

                                    <div class="panel-body post-body">
                                        <a class="label label-default" href="info.php?id=<?php echo $s['id']; ?>"><?php echo $s['tipe']; ?></a>
                                        <h3 class="post-title">
                                            <a href="info.php?id=<?php echo $s['id']; ?>"><?php 
                                             $judul = $s["judul"];
                                             if (strlen($judul) > 60) {
                                                    $judul = substr($judul, 0, 60) . "...";
                                                }
                                            echo $judul; ?></a>
                                        </h3>
                                        <p>
                                            <?php 
                                            $deskripsi = $s["isi"];
                                            if (strlen($deskripsi) > 25) {
                                                $deskripsi = substr($deskripsi, 0, 100) . "...";
                                            }
                                            echo $deskripsi; ?>
                                        </p>
                                        <hr>
                                        <div class="post-author">
                                            <p><?php echo $s['author']; ?> <?php echo $s['created_at']; ?></p>
                                        </div>
                                        
                                    </div>
                                    
                                        </div>
                                        
                                        </div>
                          
                           <?php 
                    }
                    ?>
                    </div>
                    
                </div>
                
                </div>
                </div>
                   
          






            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from diri where id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">
                            <img src="../assets/img/product/profile-bg.jpg" alt="">
                        </a>
                    </div>

                    <div class="single-product-text">
                        <?php 
                        if($s['foto'] == ""){
                            ?>
                        <img class="img-user" src="../gambar/sistem/user.png">
                        <?php
                        }else{
                            ?>
                        <img class="img-user" src="../gambar/user/<?php echo $s['foto']; ?>">
                        <?php
                        }
                        ?>

                        <h4><a class="cards-hd-dn" href="#"><?php echo $s['nama']; ?></a></h4>
                        <h5>user</h5>
                        <p class="ctn-cards">Pengelolaan arsip jadi lebih mudah dengan sistem informasi arsip digital.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>