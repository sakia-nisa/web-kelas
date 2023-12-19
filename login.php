<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$pw = $_POST['pw'];

$data = mysqli_query($conn,"select * from lgn where username='$username' and pw='$pw'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
	$_SESSION['status'] = "LOGIN";
	header("location:dashboard.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>