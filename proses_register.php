<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$telepon = $_POST['telepon'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO user values ('','$nama','$email','$alamat','$provinsi','$telepon','$password','pembeli')");

header("location:login.php");


?>