<?php
include '../koneksi.php';

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM cart where id='$id'");

header("location:keranjang.php");
?>