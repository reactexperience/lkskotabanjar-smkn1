<?php 
include '../koneksi.php';

$id = $_GET["id"];
$kode_tagihan = $_POST['kode_tagihan'];
 
mysqli_query($koneksi, "update transaksi set status='Telah Dikonfirmasi' where id_transaksi='$id'");
mysqli_query($koneksi, "DELETE FROM tagihan where kode_tagihan='$kode_tagihan'");

header("location:transaksi.php");
 
?>