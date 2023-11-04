<?php 
include("../conf/config.php");
$query = mysqli_query($koneksi,"SELECT count(id) AS jmlcdb FROM tbl_cdb");
$view = mysqli_fetch_array($query);?>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $view['jmlcdb'];?></h3>

                <p>DATABASE</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="tbl_cdb" class="small-box-footer"> <i class="ion ion-person"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $view['jmlcdb'];?><sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="tbl_cdb" class="small-box-footer"> <i class="ion ion-stats-bars"></i></a>
            </div>
          </div>
          <!-- ./col 
          <div class="col-lg-3 col-6">
             small box 
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>CDB</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        ./col -->
          <?php 
include("../conf/config.php");
$query = mysqli_query($koneksi,"SELECT count(id_unit) AS jmlunit FROM tbl_unit");
$view = mysqli_fetch_array($query);?>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $view['jmlunit'];?></h3>

                <p>UNIT</p>
              </div>
              <div class="icon">
                <i class="fa fa-motorcycle"></i>
              </div>
              <a href="data_unit.php" class="small-box-footer"> <i class="fas fa-motorcycle"></i></a>
            </div>
      
       