<?php
include '../koneksi.php';

$tagihan = $_POST['tagihan'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$telepon = $_POST['telepon'];
$jumlah = $_POST['jumlah'];
$harga_total = $_POST['harga_total'];
$atm = $_POST['atm'];

mysqli_query($koneksi, "INSERT INTO transaksi values ('','$tagihan','$nama','$email','$alamat','$provinsi','$telepon','$jumlah','$harga_total','$atm','Menunggu Konfirmasi')");
mysqli_query($koneksi, "DELETE FROM cart where email='$email'");

header("location:sukses.php");

?>