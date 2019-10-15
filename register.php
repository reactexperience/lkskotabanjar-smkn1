<!DOCTYPE html>
<html>
<head>
	<title>Register | REACT-SHOP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="style-auth.css">
	<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>

	<h1><br/></h1>

	<div class="kotak_login">
	<center>
		<img src="img/react.png" width="30%" alt="">
		<h5>REACT-SHOP</h5>
		</center>

		<form method="POST" action="proses_register.php">
			<label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Masukan Nama">

			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email">
			
			<label>Alamat Rumah</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat Rumah">
			
			<label>Provinsi</label>
			<select name="provinsi" class="form_login" id="" required>
                <option value="" disabled selected>Pilih Provinsi</option>
			    <option value="Jawa Barat">Jawa Barat</option>
			    <option value="Jawa Tengah">Jawa Tengah</option>
			    <option value="Jawa Timur">Jawa Timur</option>
			    <option value="Jakarta">Jakarta</option>
			</select>
			
			<label>No Telepon</label>
			<input type="phone" name="telepon" class="form_login" placeholder="Masukan No. Telpon">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password">

			<input type="submit" class="tombol_login" value="DAFTAR">

			<br/>
			<br/>
		</form>
		
	</div>


</body>
</html>