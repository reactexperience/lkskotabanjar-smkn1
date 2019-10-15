<?php 
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];
$kategori = $_POST['kategori'];
 
mysqli_query($koneksi,"update produk set nama_produk='$nama', harga='$harga', stok='$stok', gambar='$gambar', kategori='$kategori' where id='$id'");
 
header("location:produk.php");
 
?>