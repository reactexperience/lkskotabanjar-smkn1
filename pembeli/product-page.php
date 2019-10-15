<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk where id='$id'");
$row = mysqli_fetch_assoc($query);
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Halaman Produk | REACT-SHOP</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="../indexp.php#menu">
        <strong class="blue-text">Kembali</strong>
      </a>

      
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
            <a href="keranjang.php"><i class="fas fa-shopping-cart"></i></a>
              
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4 text-center">

          <img src="../img/<?php echo $row['gambar']; ?>" width="50%" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              
              <a href="">
                <span class="badge blue mr-1"><?php echo $row['kategori']; ?></span>
              </a>
            </div>

            <form action="tambah-keranjang.php" method="POST">
            <input type="hidden" name="id_produk" value="<?php echo $row['id']; ?>">
            <p name="nama" class="lead font-weight-bold"><?php echo $row['nama_produk']; ?></p>

            <p class="lead">
              
                <span>IDR <?php echo $row['harga']; ?></span>
                <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>">
                <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>">
                <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>">
              </p>

            <p>Tersedia.</p>

            <div class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="hidden" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>">
              <input type="number" value="1" name="jumlah" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>

      

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
