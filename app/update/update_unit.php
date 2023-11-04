<?php
include('../../conf/config.php');
$id_unit     = $_POST['id_unit'];
$kode_unit    = $_POST['kode_unit'];
$noka   = $_POST['noka'];
$nosin = $_POST['nosin'];
$detail_unit  = $_POST['detail_unit'];

//Nama Foto//
$nama_file = $_FILES['foto_unit']['name'];
//echo $nama_file;

//Lokasi Foto//
$file_tmp = $_FILES['foto_unit']['tmp_name'];
move_uploaded_file($file_tmp,'../foto_unit/'.$nama_file);
$query = mysqli_query($koneksi,"UPDATE tbl_unit SET kode_unit='$kode_unit ',noka='$noka',nosin='$nosin',detail_unit='$detail_unit',foto_unit='$nama_file' WHERE id_unit='$id_unit'");
header('location: ../index.php?page=data_unit');
?>