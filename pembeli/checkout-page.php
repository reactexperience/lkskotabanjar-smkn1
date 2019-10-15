<?php
include '../koneksi.php';
$email = $_GET['email'];
$cart = mysqli_query($koneksi, "SELECT nama_produk, harga, harga_total FROM cart where email='$email'");
$user = mysqli_query($koneksi, "SELECT * FROM user where email='$email'");
$rowcount = mysqli_num_rows($cart);
$row = mysqli_fetch_assoc($cart); 
$rowuser = mysqli_fetch_assoc($user);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Checkout</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="blue-text">REACT-SHOP</strong>
      </a>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" method="POST" action="proses_transaksi.php">

              <!--address-->
              <div class="md-form mb-5">
                  <input type="hidden" id="tagihan" class="form-control" name="tagihan" value="#REACT" readonly>
                </div>

              <div class="md-form mb-5">
                  <input type="text" id="address" class="form-control" name="nama" value="<?php echo $rowuser['nama']; ?>" readonly>
                  <label for="address" class="">Nama</label>
                </div>

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" id="email" class="form-control" name="email" value="<?php echo $rowuser['email']; ?>" readonly>
                <label for="email" class="">Email</label>
              </div>

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" name="alamat" value="<?php echo $rowuser['alamat']; ?>" readonly>
                <label for="address" class="">Alamat</label>
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" name="provinsi" value="<?php echo $rowuser['provinsi']; ?>" readonly>
                <label for="address-2" class="">Provinsi</label>
              </div>

              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" name="telepon" value="<?php echo $rowuser['telepon']; ?>" readonly>
                <label for="address-2" class="">No Telepon</label>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Bayar Sekarang</button>

              
            </div>
          <!--/.Card-->
          
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">
          
          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo $rowcount;?></span>
            <input type="hidden" name="jumlah" value="<?php echo $rowcount;?>">
          </h4>
          
          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <?php while($row = mysqli_fetch_assoc($cart)){ ?>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (IDR)</span>
              <strong><?= $row['harga_total']; ?></strong>
            <input type="hidden" name="harga_total" value="<?= $row['harga_total']; ?>">
            </li>
            <?php } ?>
          </ul>
          <label for="country">Pembayaran</label>
                  <select class="custom-select d-block w-100" id="country" name="atm" required>
                    <option value="" selected disabled>Pilih ATM</option>
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                    <option value="BNI">BNI</option>
                    <option value="BJB">BJB</option>
                    <option value="MANDIRI">MANDIRI</option>
                  </select>
          
                  
                </form>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
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

    function tagihan(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}
    document.getElementById("tagihan").value += tagihan(5);
  </script>
</body>

</html>
