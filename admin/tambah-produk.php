<?php 
include 'partial/header.php';
?>
   

   <div class="row">
    <div class="container">
            <form method="POST" action="a-tambah-produk.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Produk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select class="form-control" name="kategori" id="exampleFormControlSelect1">
    <option value="" selected disabled>Pilih Kategori</option>
      <option value="Software">Software</option>
      <option value="OS">OS</option>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Harga Produk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="harga" placeholder="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Stok Produk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="stok" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Gambar</label>
    <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
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
   