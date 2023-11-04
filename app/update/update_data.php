<?php
include('../../conf/config.php');
$id     = $_POST['id'];
$nik    = $_POST['nik_cdb'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp  = $_POST['no_hp'];

//Nama Foto//
$nama_file = $_FILES['foto']['name'];
//echo $nama_file;

//Lokasi Foto//
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/'.$nama_file);
$query = mysqli_query($koneksi,"UPDATE tbl_cdb SET nik_cdb='$nik ',nama='$nama',alamat='$alamat',no_hp='$no_hp',foto='$nama_file' WHERE id='$id'");
header('location: ../index.php?page=data_cdb');
?>