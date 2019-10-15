<!DOCTYPE html>
<html>
<head>
	<title>Login | REACT-SHOP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="style-auth.css">
	<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>

	<h1><br/></h1>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<p class='p'>Username atau Password Salah!</p>";
            } else if($_GET['pesan'] == "belum_login"){
                   echo "<p class='p'>Anda Harus login untuk ke admin!</p>";
            }
        }
    ?>

	<div class="kotak_login">
		<center>
		<img src="img/react.png" width="30%" alt="">
		<h5>REACT-SHOP</h5>
		</center>

		<form method="POST" action="proses_login.php">
			<label>Email</label>
			<input type="email" name="email" class="form_login" placeholder="Email">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN">
			
			<center>
				<br>
			<a href="register.php">Belum Punya Akun? Daftar Disini!</a>
			</center>

			<br/>
			<br/>
		</form>
		
	</div>


</body>
</html>