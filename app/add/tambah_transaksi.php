<?php
include('../../conf/config.php');
$kd_transaksi = $_GET['kd_transaksi'];
$nik = $_GET['nik_cdb'];
$tgl_transaksi = $_GET['tgl_transaksi'];
$tanda_jadi = $_GET['tanda_jadi'];
$jenis_transaksi = $_GET['jenis_transaksi'];
$detail_transaksi = $_GET['detail_transaksi'];
$query = mysqli_query($koneksi,"INSERT INTO transaksi (`no_transaksi`,`kd_transaksi`,`nik_cdb`,`tgl_transaksi`,`tanda_jadi`,`jenis_transaksi`,`detail_transaksi`,) VALUES('','$kd_transaksi ','$nik','$tgl_transaksi','$tanda_jadi','$jenis_transaksi','$detail_transaksi')");
header('location: ../index.php?page=report');
?>