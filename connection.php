<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pencatatan_suhu_tubuh";
$port_database = "3306";

$conn = mysqli_connect($host, $user, $pass, $db, $port_database);

if ($conn) {
    echo "<script>console.log('Koneksi Ke Database Berhasil')</script>";
} else {
    echo "<script>console.log('Koneksi Ke Database Gagal')</script>";
}
