<?php 
session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);


$login = mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['role']=="admin"){
        $_SESSION['pesan'] = "login";
		header("location:admin/admin.php");

	}else if($data['role']=="pembeli"){
		$_SESSION['email'] = $email;
        $_SESSION['pesan'] = "login";
		header("location:indexp.php");

	}else{

		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>