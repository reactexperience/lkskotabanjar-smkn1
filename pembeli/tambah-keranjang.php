<?php
include '../koneksi.php';

$id_produk = $_POST['id_produk'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$harga_total = $harga * $jumlah;
$gambar = $_POST['gambar'];

mysqli_query($koneksi, "INSERT INTO cart values ('','$id_produk','$email','$nama','$jumlah','$harga','$harga_total','$gambar')");

header("location:keranjang.php");

?>