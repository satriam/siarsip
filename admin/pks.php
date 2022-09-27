<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data PKS</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">PKS</span></li>
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
            <h3 class="panel-title">Tabel Data PKS</h3>
        </div>
        <div class="panel-body">
 <div class="pull-right">
                <a href="pks_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>

            <br>
            <br>
            <br>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
            
                <thead>
                    <tr>
                      <th rowspan="2">Nama</th>
                      <th rowspan="2">Akhir PKS</th>
                      <th rowspan="2">Masa Kerja</th>
                      <th rowspan="2">Sisa Kerja</th>
                        <th colspan="2">Masa PKS I</th>
                        <th colspan="2">Masa PKS II</th>
                        <th colspan="2">Masa PKS III</th>
                        <th colspan="2">Masa PKS IV</th>
                        <th rowspan="2"class="text-center" width="10%">OPSI</th>
                        
                    </tr>
                    <tr>
                        <th >Mulai</th>
                        <th>Akhir</th>
                        <th >Mulai</th>
                        <th>Akhir</th>
                        <th >Mulai</th>
                        <th>Akhir</th>
                        <th >Mulai</th>
                        <th>Akhir</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                   
                $kategori = mysqli_query($koneksi,"select pks.id,diri.nama,pks.akhir_pks,pks.mulai1,pks.mulai2,pks.mulai3,pks.mulai4,pks.akhir1,pks.akhir2,pks.akhir3,pks.akhir4 from pks INNER JOIN diri ON pks.id_diri = diri.id;");
                // $kategori = mysqli_query($koneksi,"select * from pks ,diri ORDER BY id DESC ");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
                        <tr>
                          <td><?php echo $p['nama']?></td>
                          <td><?php echo $p['akhir_pks']?></td>
                          <td>
                          <?php 
                          $lahir    =new DateTime($p['mulai1']);
                          $akhir    =new DateTime($p['akhir_pks']);
                          $masa = $akhir->diff($lahir);
                          echo $masa->y; echo " Tahun, "; echo $masa->m; echo " Bulan, dan "; echo $masa->d; echo " Hari";?></p>
                          </td>
                          
                          <td>
                          <?php 
                          $akhir    =new DateTime($p['akhir_pks']);
                           $today        =new DateTime();
                          $masa = $today->diff($akhir);
                          echo $masa->y; echo " Tahun, "; echo $masa->m; echo " Bulan, dan "; echo $masa->d; echo " Hari";?></p>
                          </td>
                          
                            <td><?php echo $p['mulai1'] ?></td>
                            <td><?php echo $p['akhir1'] ?></td>
                            <td><?php echo $p['mulai2'] ?></td>
                            <td><?php echo $p['akhir2'] ?></td>
                            <td><?php echo $p['mulai3'] ?></td>
                            <td><?php echo $p['akhir3'] ?></td>
                            <td><?php echo $p['mulai4'] ?></td>
                            <td><?php echo $p['akhir4'] ?></td>
                            <td class="text-center">
                                <?php 
                                if($p['id'] != 0){
                                    ?>
                                    <div class="btn-group">
                                        
                                        <a href="pks_update.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                        <a href="lokasi_hapus.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
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