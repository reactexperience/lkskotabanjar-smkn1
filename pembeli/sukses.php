<?php
include '../koneksi.php';
session_start();
$email = $_SESSION['email'];
$tagihan = mysqli_query($koneksi, "SELECT * FROM transaksi where email='$email' ORDER BY id_transaksi DESC");
$row = mysqli_fetch_assoc($tagihan);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container text-center">
        <img src="../img/payment.png" width="50%" alt="">
        <h1>Proses Transaksi Berhasil!</h1>
        <p>No. Tagihan Anda : <?php echo $row['kode_tagihan']; ?> </p>
        <h4 class="text-muted">Silahkan lakukan pembayaran ke NO. REK 318902830 (A.N React-SHOP)</h4> <br>
        <a href="konfirmasi_pembayaran.php"><button class="btn btn-success">Konfirmasi Sekarang</button> <br></a>
        <a href="../indexp.php#menu"><button class="btn btn-white">Kembali ke Toko</button></a>
    </div>
</body>
</html>