<?php
$servername = "localhost"; 
$username = "root"; 
$pw = ""; 
$dbname = "data_lgn"; 

$conn = mysqli_connect($servername, $username, $pw, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
