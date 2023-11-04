<?php
include('../../conf/config.php');
$kode_unit = $_GET['kode_unit'];
$noka = $_GET['noka'];
$nosin = $_GET['nosin'];
$detail_unit = $_GET['detail_unit'];
$query = mysqli_query($koneksi,"INSERT INTO tbl_unit (id_unit,kode_unit,noka,nosin,detail_unit) VALUES('','$kode_unit ','$noka','$nosin','$detail_unit')");
header('location: ../index.php?page=data_unit');
?>