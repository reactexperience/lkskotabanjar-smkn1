<?php
include '../koneksi.php';

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM produk where id='$id'");

header("location:produk.php");
?>