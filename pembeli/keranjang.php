<?php
session_start();
$email = $_SESSION['email'];
include '../koneksi.php';
$cart = mysqli_query($koneksi, "SELECT * FROM cart where email='$email'");
$no = 1;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Keranjang Belanja!</title>
  </head>
  <body>
      <div class="container">
          <h5 class="text-center mt-5">Keranjang Belanja</h5>
    <a href="../indexp.php#menu"><button class="btn btn-success mt-5">Tambah Barang</button></a>
  <table class="table table-hover mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php while($row = mysqli_fetch_assoc($cart)){ ?>
    <tr>
      <th scope="row"><?php echo $no++;?></th>
      <td><img src="../img/<?= $row['gambar']; ?>" width="20%" alt=""></td>
      <td><?= $row['nama_produk']; ?></td>
      <td><?= $row['harga']; ?></td>
      <td><?= $row['jumlah']; ?></td>
      <td><?= $row['harga_total']; ?></td>
      <td><a href="hapus-keranjang.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Hapus</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<a href="checkout-page.php?email=<?php echo $_SESSION['email'];?>"><button class="btn btn-primary float-right">Checkout</button></a>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>