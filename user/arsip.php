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
    <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from diri where id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
    <div class="panel-heading">
      <h3 class="panel-title">DATA DIRI</h3>
    </div>
    <div class="panel-body">
      <div class="col-md-2">
        <?php 
              if($s['foto'] == ""){
              ?>
        <img src="../gambar/sistem/user.png">
        <?php
              }else{
              ?>
        <img src="../gambar/user/<?php echo $s['foto']; ?>">
        <?php
              }
              ?>
      </div>

      <div class="col-lg-10">
        <div class="card-body">
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <input type="hidden" name="id" value="<?php echo $s['id']; ?>">
              <p class="mb-0"><b>Nama</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['nama'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Tempat Lahir</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['tempat_lahir'];?></p>
            </div>
          </div>
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>tanggal Lahir</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['tanggal_lahir'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Golongan Darah</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['goldar'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>NIK</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['nik'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Status Kawin</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['status_kawin'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Alamat</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['alamat'];?></p>
            </div>
          </div>
          <!-- <hr> -->

          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>NPWP</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['npwp'];?></p>
            </div>
          </div>

          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Telpon 1</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['telpon1'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Telpon 2</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['telpon2'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>BPJS</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['bpjs'];?></p>
            </div>
          </div>
          <!-- <hr>
             <br> -->
          <div class="row col-lg-5 ">
            <div class="col-sm-4">
              <p class="mb-0"><b>Email</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['email'];?></p>
            </div>
          </div>

          <div class="row col-lg-5 ">
            <div class="col-sm-4">
              <p class="mb-0"><b>Serata</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['serata'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5 ">
            <div class="col-sm-4">
              <p class="mb-0"><b>Jurusan</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['jurusan'];?></p>
            </div>
          </div>
          <!-- <hr> -->
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Universitas</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $s['univ'];?></p>
            </div>
          </div>
          <div class="row col-lg-5">
            <div class="col-sm-4">
              <p class="mb-0"><b>Umur</b></p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php $lahir    =new DateTime($s['tanggal_lahir']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
                    ?></p>
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
      <h3 class="panel-title">Data Rekening</h3>
    </div>

    <div class="panel-body">
      <div class="pull-right">
        <a href="tambah_rekening.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Rekening</a>
        <br><br>
      </div>
      

      <table id="table" class="table table-bordered table-striped table-hover">
        <thead>

          <tr>
            <th>Bank</th>
            <th>NO Rekening</th>
          </tr>
        </thead>

        <tbody>
          <?php 
                    $id = $_SESSION['id'];
                $kategori = mysqli_query($koneksi,"select * from rekening where id_diri='$id'");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
          <tr>
            <td><?php echo $p['Bank']?></td>
            <td><?php echo $p['Rekening']?></td>
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
      <h3 class="panel-title">Data Rekening</h3>
    </div>

    <div class="panel-body">
      <div class="pull-right">
        <a href="sertif_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Rekening</a>
        <br><br>
      </div>

      <table id="table" class="table table-bordered table-striped table-hover">
        <thead>

          <tr>
            <th width="1%">No</th>
            <th>nama sertifikat</th>
            <th>foto</th>
            <th>aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          $no = 1;
                    $id = $_SESSION['id'];
                $kategori = mysqli_query($koneksi,"select * from sertifikat where id_diri='$id'");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $p['nama_sertif']?></td>
            <td><?php echo $p['gambar']?></td>
             <td class="text-center">
                                <div class="btn-group">
                                  <a href="sertif.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                    <a href="sertif_edit.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                    <a href="sertif_hapus.php?id=<?php echo $p['id']; ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
            <?php 
                    }
                    ?>
        </tbody>
                  </table>
    </div>
  </div>
</div>






