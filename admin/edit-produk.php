<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk");
$row = mysqli_fetch_assoc($query);
include 'partial/header.php';
?>
   

   <div class="row">
    <div class="container">
            <form method="POST" action="a-edit-proses.php">
  <div class="form-group">
    <input type="hidden" value="<?php echo $row['id']; ?>"  class="form-control" id="exampleFormControlInput1" name="id" placeholder="">
  </div><div class="form-group">
    <label for="exampleFormControlInput1">Nama Produk</label>
    <input type="text" value="<?php echo $row['nama_produk']; ?>"  class="form-control" id="exampleFormControlInput1" name="nama" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" name="kategori" id="exampleFormControlSelect1">
    <option value="<?php echo $row['kategori']; ?>" selected ><?php echo $row['kategori']; ?></option>
      <option value="Software">Software</option>
      <option value="OS">OS</option>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Harga Produk</label>
    <input type="text" value="<?php echo $row['harga']; ?>" class="form-control" id="exampleFormControlInput1" name="harga" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Stok Produk</label>
    <input type="text" class="form-control" value="<?php echo $row['stok']; ?>" id="exampleFormControlInput1" name="stok" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Gambar</label>
    <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
    <img src="../img/<?php echo $row['gambar']; ?>" width="10%" alt="">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit">
  </div>
</form>
</div>
</div>


<?php 
include 'partial/footer.php';
?>
   