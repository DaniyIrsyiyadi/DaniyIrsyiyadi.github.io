<?php
include('../../conf/config.php');
$id_unit = $_GET['id_unit'];

$query = mysqli_query($koneksi,"DELETE FROM tbl_unit WHERE id_unit='$id_unit'");
header('location: ../index.php?page=data_unit');
?>