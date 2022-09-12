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
    <div class="panel-body">
      <div class="pull-right">
        <a href="dt_user.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
      </div>
      <br>
      <br>

      <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select *from diri where id='$id'"); 
                    while($d = mysqli_fetch_array($data)){
                        ?>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
              <p class="mb-0">Nama</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['nama'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Tempat Lahir</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['tempat_lahir'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Tanggal Lahir</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['tanggal_lahir'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Golongan Darah</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['goldar'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">NIK</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['nik'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Status Kawin</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['status_kawin'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Alamat</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['alamat'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['email'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">NPWP</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['npwp'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">NIP</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['nip'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Telpon 1</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['telpon1'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Telpon 2</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['telpon2'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">BPJS</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['bpjs'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Serata</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['serata'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Jurusan</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['jurusan'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Universitas</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php echo $d['univ'];?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <p class="mb-0">Umur</p>
            </div>
            <div class="col-sm-8">
              <p class="text-muted mb-0"><?php $lahir    =new DateTime($d['tanggal_lahir']);
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
</div>
</div>
<?php 
                    }
                    ?>

</section>