<?php
include '../koneksi.php';

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM transaksi where id_transaksi='$id'");

header("location:transaksi.php");
?>