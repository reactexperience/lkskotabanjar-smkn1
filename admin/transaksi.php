<?php

include '../koneksi.php';



$query = mysqli_query($koneksi, "SELECT * FROM transaksi");




include 'partial/header.php';
?>

<div id="content">
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Tagihan</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Provinsi</th>
                      <th>No. Telepon</th>
                      <th>Jumlah Barang</th>
                      <th>Total</th>
                      <th>ATM</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php while($row = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $row['id_transaksi']; ?>">
                        <input type="hidden" name="kode_tagihan" value="<?php echo $row['kode_tagihan']; ?>">
                      <td><?= $row['kode_tagihan']; ?></td>
                      <td><?= $row['nama']; ?></td>
                      <td><?= $row['email']; ?></td>
                      <td><?= $row['alamat']; ?></td>
                      <td><?= $row['provinsi']; ?></td>
                      <td><?= $row['telepon']; ?></td>
                      <td><?= $row['jumlah_barang']; ?></td>
                      <td><?= $row['total']; ?></td>
                      <td><?= $row['atm']; ?></td>
                      <td><?= $row['status']; ?></td>
                      <td>
                          <a href="konfirmasi.php?id=<?php echo $row['id_transaksi']; ?>"><button class="btn btn-primary">Konfirmasi</button></a> <br> <br>
                          <a href="hapus-transaksi.php?id=<?php echo $row['id_transaksi']; ?>"><button class="btn btn-danger">Hapus</button></a>
                      </td>
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