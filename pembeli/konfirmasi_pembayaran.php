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
    <div class="container mt-5 text-center">
        <h3>Konfirmasi Pembayaran</h3>
        <div class="col-sm-6 text-center offset-3 mt-5">
        <form method="POST" action="a-konfirmasi-pembayaran.php">
        <div class="form-group">
            <input type="text" class="form-control" name="kode_tagihan" id="exampleFormControlInput1" placeholder="Masukkan Kode Tagihan">
        </div> <br>
            <div class="form-group text-left">
            <label for="exampleFormControlFile1">Lampirkan Bukti Pembayaran</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <input type="submit" class="btn btn-success" value="Konfirmasi">
        </form>
        </div>
    </div>
</body>
</html>