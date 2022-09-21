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
                <a href="dt_user_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Karyawan</a>
            </div>

            <br>
            <br>
            <br>
            <table class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>NIP</th>
                        <th>Telpon</th>
                        <th>Strata</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $kategori = mysqli_query($koneksi,"SELECT * FROM diri");
                    while($p = mysqli_fetch_array($kategori)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p['nama'] ?></td>
                            <td><?php echo $p['nik'] ?></td>
                            <td><?php echo $p['alamat'] ?></td>
                            <td><?php echo $p['email'] ?></td>
                            <td><?php echo $p['nip'] ?></td>
                            <td><?php echo $p['telpon1'] ?></td>
                            <td><?php echo $p['serata'] ?></td>
                            <td width="11%">
                                <?php 
                                if($p['id'] != 0){
                                    ?>
                                    <div class="btn-group">
                                        <a href="dt_user_view.php?id=<?php echo $p['id']; ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="dt_user_edit.php?id=<?php echo $p['id']; ?>" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                                        <a href="#" onClick="confirm_modal('dt_user_hapus.php?&id=<?php echo  $p['id']; ?>');" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

            <!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
      </div>
                
      <div class="modal-footer"  style="text-align:center;" >
        <button type="button"class="btn btn-danger btn-sm" ><a href="#"  id="delete_link">Hapus</a></button>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>  


        </div>

    </div>
</div>



<?php include 'footer.php'; ?>