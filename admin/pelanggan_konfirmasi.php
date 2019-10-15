<?php

include '../koneksi.php';



$query = mysqli_query($koneksi, "SELECT * FROM tagihan");




include 'partial/header.php';
?>

<div id="content">
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Tagihan</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php while($row = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                      <td><?= $row['kode_tagihan']; ?></td>
                      <td><img src="../img/<?= $row['gambar']; ?>" width="20%" alt=""></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        </div>

<?php
include 'partial/footer.php';
?>