<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tbl_cdb WHERE id='$id'");
header('location: ../index.php?page=data_cdb');
?>