<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Edit Kategori</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Kategori</span></li>
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
                    <h3 class="panel-title">Edit User</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">            
                        <a href="user.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from user where user_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <form method="post" action="user_update.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id" value="<?php echo $d['user_id']; ?>">
                                <input type="text" class="form-control" name="nama" required="required" value="<?php echo $d['user_nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" required="required" value="<?php echo $d['user_username']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                                <small>Kosongkan jika tidak ingin mengubah password.</small>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto">
                                <small>Kosongkan jika tidak ingin mengubah foto.</small>
                            </div>

                            <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>

                     


<form class="col-xs-8">
     <div class="col-xs-8">
    <label for="inputAddress" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="nama lengkap">
  </div>
  <div class="col-md-8">
    <label for="inputEmail4" class="form-label">tempat,tanggal lahir</label>
    <input type="email" class="form-control" id="inputEmail4"placeholder="nama lengkap">
  </div>
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Status Kawin</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
    <div class="col-md-8">
      jenis kelamin
      pria:<input type="radio" name="jenis_kelamin"value="pria">
      wanita:<input type="radio" name="jenis_kelamin"value="wanita">
  </div>
  <div class="col-md-8">
    golongan darah
  A:<input type="radio" name="golongan_darah"value="A">
  B:<input type="radio" name="golongan_darah"value="B">
  O:<input type="radio" name="golongan_darah"value="O">
  </div>
  <div class="col-md-8">
    <label for="inputAddress" class="form-label">Nik</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
  <div class="col-md-8">
    <label for="inputAddress2" class="form-label">Kk</label>
    <input type="text" class="form-control" id="inputAddress2" >
  </div>
  <div class="col-md-8" row="12">
    <label for="inputCity" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputCity"placeholder="">
</div>
      <div class="col-md-8">
    <label for="inputAddress" class="form-label">No.Tlp</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
    <div class="col-md-8">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
        <div class="col-sm-8">
                  <label for="inputAddress" class="form-label">Pendidikan</label>
                  <input type="text" class="form-control" id="inputAddress"placeholder="Universitas">
                 <input type="text" class="form-control" id="inputAddress"placeholder="Jurusan">
                <input type="text" class="form-control" id="inputAddress"placeholder="Strata"><br>
            </div>

            <div class="col-sm-6">
             <a href="#" class="btn btn-primary btn-lg active" role="button" aria-disabled="true">Print Data</a>
              <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
            </div>
</form>
   </form>

                        <?php 
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>
<br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br>    




<?php include 'footer.php'; ?>