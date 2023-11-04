
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
       
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">TABLE CDB</h3>
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
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                    $query = mysqli_query ($koneksi,"SELECT * FROM tbl_cdb");
                    while($cdb = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $cdb['nik_cdb'];?></td>
                    <td><?php echo $cdb['nama'];?></td>
                    <td><?php echo $cdb['alamat'];?></td>
                    <td><?php echo $cdb['no_hp'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $cdb['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&& id=<?php echo $cdb['id'];?>" class="btn btn-sm btn-success">Edit</a>
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
              <h4 class="modal-title">TAMBAH DATA</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
                      
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="NIK" name="nik_cdb" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="NAMA" name="nama" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="ALAMAT" name="alamat" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="NO HP" name="no_hp" required>
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
        function hapus_data(data_id){
          //alert('ok')
         // window.location=("delete/hapus_data.php?id="+data_id);
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
              window.location=("delete/hapus_data.php?id="+data_id);
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