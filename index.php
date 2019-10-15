<?php
include 'koneksi.php';
$produk = mysqli_query($koneksi, "SELECT * FROM produk where kategori='Software'");
$produkos = mysqli_query($koneksi, "SELECT * FROM produk where kategori='OS'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REACT-SHOP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
  
   
   <div class="inibg">
    <div class="navbar">
       <div class="container">
        <ul>
            <img src="img/react.png" width="5%" alt="">
            <li style="float: right;"><a href="login.php">LOGIN</a></li>
            <li style="float: right;"><a href="register.php">DAFTAR</a></li>
        </ul>
    </div>
    </div>
    
    <div class="tron">
       <div class="container">
           <h1>Welcome to REACT-SHOP</h1>
           <h4 style="font-family: Montserrat Thin;">Dapatkan Software Original dengan Harga <br> yang terjangkau! Dijamin Terpercaya</h4>
           <a href="#menu"><button class="btn-white">Lihat Produk</button></a>
       </div>
    </div>
    </div>
    
    <div class="img-banner">
        <img src="img/shop.png" width="25%" alt="">
    </div>
    
    <div class="menu" id="menu">
        <ul>
            <li><a style="color: black;" id="software">Software</a></li>
            <li><a style="color: black;" id="os">OS</a></li>
        </ul>
    </div>
    
    <div class="search">
        <form class="search-container">
    <input type="text" id="search-bar" placeholder="Cari produk">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>
    </div>
    
<!--    Product Software      -->
    <div class="container">
    <div class="product" id="product">
        <div class="row">
           <?php while($row = mysqli_fetch_assoc($produk)){ ?>
            <div class="column">
                <img src="img/<?= $row['gambar']; ?>" width="40%" alt="">
                <h2 class="judul"><?= $row['nama_produk']; ?></h2>
                <h4 class="tersedia">Tersedia</h4>
                <h3 class="harga">IDR <span class="hargano"><?= $row['harga']; ?></span></h3>
                <a href="login.php"><button class="btn-gradient">Beli</button></a>
            </div>
            <?php } ?>
<!--
            <div class="column">
                <img src="img/office.jpg" width="28%" alt="">
                <h2 class="judul">Microsoft Office Home <br> & Student 2019</h2>
                <h4 class="tersedia">Tersedia</h4>
                <h3 class="harga">IDR <span class="hargano">1.000.000</span></h3>
                <button class="btn-gradient">Beli</button>
            </div>
            <div class="column">
                <img src="img/vegas.jpg" width="40%" alt="">
                <h2 class="judul">Magix Sony VEGAS <br> PRO 14</h2>
                <h4 class="tersedia">Tersedia</h4>
                <h3 class="harga">IDR <span class="hargano">1.000.000</span></h3>
                <button class="btn-gradient">Beli</button>
            </div>
-->
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
    
    
    
<!--    Product OS      -->
   
   <div class="product-os" id="product-os">
        <div class="row">
        <?php while($row = mysqli_fetch_assoc($produkos)){ ?>
            <div class="column">
            <img src="img/<?= $row['gambar']; ?>" width="40%" alt="">
                <h2 class="judul"><?= $row['nama_produk']; ?></h2>
                <h4 class="tersedia">Tersedia</h4>
                <h3 class="harga">IDR <span class="hargano"><?= $row['harga']; ?></span></h3>
                <a href="login.php"><button class="btn-gradient">Beli</button></a>
            </div>
        </div>
        <?php } ?>
    </div>
    
    
    
    
    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script>
        $('#product-os').hide();
        $(function(){
             $('#os').on('click',function(){
               $('#product').fadeOut();
               $('#product-os').fadeIn();
             });
             $('#software').on('click',function(){
               $('#danceforme').show();
                 $('#product-os').fadeOut();
               $('#product').fadeIn();
             });
            });
    </script>
</body>
</html>