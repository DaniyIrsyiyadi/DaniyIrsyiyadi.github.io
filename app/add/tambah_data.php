<?php
include('../../conf/config.php');
$nik = $_GET['nik_cdb'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$no_hp = $_GET['no_hp'];
$query = mysqli_query($koneksi,"INSERT INTO tbl_cdb (id,nik_cdb,nama,alamat,no_hp) VALUES('','$nik ','$nama','$alamat','$no_hp')");
header('location: ../index.php?page=data_cdb');
?>