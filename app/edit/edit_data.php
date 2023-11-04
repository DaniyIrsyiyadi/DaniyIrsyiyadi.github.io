<?php
$id    = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tbl_cdb WHERE id='$id'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA CDB</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_data.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="NIK" name='nik_cdb' value="<?php echo $view['nik_cdb'];?>">
                        <input type="text" class="form-control" placeholder="NIK" name='id' value="<?php echo $view['id'];?>"hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>ALAMAT</label>
                        <input class="form-control" rows="3" placeholder="Alamat" name='alamat' value="<?php echo $view['alamat'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NO HP</label>
                        <input type="text" class="form-control" placeholder="No Handphone" name='no_hp' value="<?php echo $view['no_hp'];?>">
                      </div>
                    </div>
                      <label for="formFileMultiple" class="form-label">Masukan Berkas Foto</label>
                      <input class="form-control" type="file" name="foto" id="formFileMultiple" multiple />
                      <br></br>
                  </div>
                    <div class="row">
                    <div class="col-sm-12">
                      <img src="foto/<?php echo $view['foto'];?>" width="300px" class="rounded float">
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-sm-6">
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                  </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>