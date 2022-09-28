<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Gaji</h4>
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
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Tabel Data Gaji</h3>
        </div>
        <div class="panel-body">
 <div class="pull-right">
                <a href="gaji_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>

            <br>
            <br>
            <br>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
            
                <thead>
                    <tr>
                      <th >Nama</th>
                      <th >Gaji</th>
                      <th >Tanggal</th>
                        <th class="text-center" width="10%">OPSI</th>
                        
                    </tr>
                    
                </thead>
                <tbody>
                    <?php 
                   
                $kategori = mysqli_query($koneksi,"select gaji.id,diri.id as idd,diri.nama,gaji.gaji,gaji.tanggal from gaji INNER JOIN diri ON gaji.id_diri = diri.id;");
                // $kategori = mysqli_query($koneksi,"select * from pks ,diri ORDER BY id DESC ");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
                        <tr>
                          <td><?php echo $p['nama']?></td>
                            <td><?php echo "Rp. ".number_format($p['gaji'])." ,-"; ?></td>
                            <td><?php echo $p['tanggal'] ?></td>
                            <td class="text-center">
                                <?php 
                                if($p['id'] != 0){
                                    ?>
                                    <div class="btn-group">
                                        
                                        <a href="gaji_update.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                        <a href="gaji_hapus.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </td>
                           
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>






<?php include 'footer.php'; ?>