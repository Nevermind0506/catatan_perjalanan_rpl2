<?php

include "../../connection.php";

$nik = $_POST['nik_input'];
$username = $_POST['username_input'];
$password = $_POST['password_input'];
$nmLengkap = $_POST['nama_lengkap_input'];
$email = $_POST['email_input'];
$jk = $_POST['jk_input'];
$noTelp = $_POST['no_telp_input'];
$tglLahir = $_POST['tgl_lahir_input'];
$tmpLahir = $_POST['tmp_lahir_input'];
$alamat = $_POST['alamat_input'];

$connection = new database();

$action = $_GET['action'];
if ($action == "add") {
    $connection->AddDataRegist($_POST['nik_input'], $_POST['username_input'], $_POST['password_input'], $_POST['nama_lengkap_input'], $_POST['email_input'], $_POST['jk_input'], $_POST['alamat_input'], $_POST['no_telp_input'], $_POST['tgl_lahir_input'], $_POST['tmp_lahir_input']);

    echo "berhasil Menambahkan data";
}
die;

// $queryRegist = "INSERT INTO `pengguna`(`nik`, `username`, `password`, `nm_lengkap`, `email`, `level`, `jk`, `alamat`, `no_telp`, `tgl_lhr`, `tmpt_lhr`) VALUES('" . $nik . "', '" . $username . "', '" . $password . "', '" . $nmLengkap . "', '" . $email . "', 'masyarakat', '" . $jk . "', '" . $alamat . "', '" . $noTelp . "', '" . $tglLahir . "', '" . $tmpLahir . "')";

// $registResult = mysqli_query($connection, $queryRegist);

// if ($registResult) {
//     echo "berhasil Menambahkan data";
// } else {
//     echo "gagal Menambahkan data";
// }
