<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi, "INSERT INTO produk values ('','$nama','$harga','$stok','$gambar','$kategori')");

echo "<script> alert('Tambah Data Berhasil!'); </script>";
header("location:admin.php");

?>
