<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Status Karyawan  </h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Status Karyawan</span></li>
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
            <h3 class="panel-title">Tabel Data Karyawan</h3>
        </div>
        <div class="panel-body">

            <table id="table" class="table table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>LOKASI</th>
                        <th>STATUS</th>
                        <th>NAMA JABATAN</th>
                        <th>JENJANG</th>
                        <th>FUNGSIONAL/STRUKTURAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                     $id = $_SESSION['id'];
                    $no = 1;
                    $kategori = mysqli_query($koneksi,"SELECT 
                    nip,
                    Nama_Lokasi,
                    jabatan.Nama_Jabatan,
                    jenjang.jenjang,
                    status.status,
                    jenis_jabatan 
                    FROM diri,status,jabatan,jenjang,lokasi 
                    where diri.id='$id' 
                    AND diri.id_jabatan=jabatan.Kode_Jabatan 
                    AND diri.id_lokasi=lokasi.id 
                    AND diri.id_jj=jenjang.id 
                    AND diri.id_status=status.id");
                    
                    while($p = mysqli_fetch_array($kategori)){
                       
                        ?>
                        <tr>
                            <td><?php echo $p['nip'] ?></td>
                            
                            <td><?php echo $p['Nama_Lokasi'] ?></td>
                            <td><?php echo $p['status'] ?></td>
                            <td><?php echo $p['Nama_Jabatan'] ?></td>
                            <td><?php echo $p['jenjang'] ?></td>
                            <td><?php echo $p['jenis_jabatan'] ?></td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Tabel Data PKS</h3>
        </div>
        <div class="panel-body">

            <table id="table" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                      <th rowspan="2">Akhir PKS</th>
                      <th rowspan="2">Masa Kerja</th>
                      <th rowspan="2">Sisa Kerja</th>
                        <th colspan="2">Masa PKS I</th>
                        <th colspan="2">Masa PKS II</th>
                        <th colspan="2">Masa PKS III</th>
                        <th colspan="2">Masa PKS IV</th>
                        
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
                    $id = $_SESSION['id'];
                $kategori = mysqli_query($koneksi,"select * from pks where id_diri='$id'");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
                        <tr>
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