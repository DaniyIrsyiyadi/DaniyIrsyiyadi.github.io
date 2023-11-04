<?php
$id_unit    = $_GET['id_unit'];
$query = mysqli_query($koneksi,"SELECT * FROM tbl_unit WHERE id_unit='$id_unit'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA UNIT</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_unit.php' enctype="multipart/form-unit">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>KODE UNIT</label>
                        <input type="text" class="form-control" placeholder="KODE UNIT" name='kode_unit' value="<?php echo $view['kode_unit'];?>">
                        <input type="text" class="form-control" placeholder="KODE" name='id_unit' value="<?php echo $view['id_unit'];?>"hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NOKA</label>
                        <input type="text" class="form-control" placeholder="Noka" name='noka' value="<?php echo $view['noka'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>NOSIN</label>
                        <input class="form-control" rows="3" placeholder="Nosin" name='nosin' value="<?php echo $view['nosin'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>DETAIL  UNIT</label>
                        <input type="text" class="form-control" placeholder="Detail Unit" name='detail_unit' value="<?php echo $view['detail_unit'];?>">
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