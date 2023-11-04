
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
       
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">TABLE UNIT</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  TAMBAH
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th> 
                    <th>KODE</th>
                    <th>NOKA</th>
                    <th>NOSIN</th>
                    <th>DETAIL</th>
                    <th>Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                    $query = mysqli_query ($koneksi,"SELECT * FROM tbl_unit");
                    while($unit = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $unit['kode_unit'];?></td>
                    <td><?php echo $unit['noka'];?></td>
                    <td><?php echo $unit['nosin'];?></td>
                    <td><?php echo $unit['detail_unit'];?></td>
                    <td>
                      <a onclick="hapus_unit(<?php echo $unit['id_unit'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-unit&& id_unit=<?php echo $unit['id_unit'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                    
                  </tr>
                  <?php }?>
                  </tbody>
                 <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>-->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">TAMBAH UNIT</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_unit.php">
            <div class="modal-body">
                      
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="KODE" name="kode_unit" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="NOKA" name="noka" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="NOSIN" name="nosin" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="DETAIL" name="detail_unit" required>
              </div>
            </div>
          
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script>
        function hapus_unit(unit_id){
          //alert('ok')
         // window.location=("delete/hapus_unit.php?id="+unit_id);
                  const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })

          swalWithBootstrapButtons.fire({
            title: 'Apakah kamu yakin?',
            text: "ingin Menghapusnya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Tidak!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location=("delete/hapus_unit.php?id="+unit_id);
              swalWithBootstrapButtons.fire(
                'Terhapus!',
                'Datamu sudah terhapus!.',
                'success'
              )
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Dibatalkan',
                'Kamu menyelamatkan dataku!! :)',
                'error'
              )
            }
          })
        }
      </script>