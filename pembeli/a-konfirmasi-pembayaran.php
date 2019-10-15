<?php
include '../koneksi.php';

$kode_tagihan = $_POST['kode_tagihan'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi, "INSERT INTO tagihan values ('$kode_tagihan','$gambar')");

header("location:sukses-konfirmasi.html");

?>