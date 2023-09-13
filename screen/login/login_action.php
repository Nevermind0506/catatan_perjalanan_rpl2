<?php

include "../../connection.php";


$username = $_POST['username_input'];
$password = $_POST['password_input'];


$connection = new database();

$action = $_GET['action'];
if ($action == "log") {
    $connection->LoginCheck($_POST['username_input'], $_POST['password_input']);
}
die;

// $queryRegist = "INSERT INTO `pengguna`(`nik`, `username`, `password`, `nm_lengkap`, `email`, `level`, `jk`, `alamat`, `no_telp`, `tgl_lhr`, `tmpt_lhr`) VALUES('" . $nik . "', '" . $username . "', '" . $password . "', '" . $nmLengkap . "', '" . $email . "', 'masyarakat', '" . $jk . "', '" . $alamat . "', '" . $noTelp . "', '" . $tglLahir . "', '" . $tmpLahir . "')";

// $registResult = mysqli_query($connection, $queryRegist);

// if ($registResult) {
//     echo "berhasil Menambahkan data";
// } else {
//     echo "gagal Menambahkan data";
// }
