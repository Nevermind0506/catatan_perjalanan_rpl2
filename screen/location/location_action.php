<?php

include "../../connection.php";





$connection = new database();
$action = $_GET['action'];
if ($action == 'add') {
    $nmLokasi = $_POST['nmLokasi_input'];
    $nmAlamat = $_POST['nmAlamat_input'];
    if (!empty($nmLokasi && $nmAlamat)) {
        $connection->addDataLocation($_POST['nmLokasi_input'], $_POST['nmAlamat_input']);
        $_SESSION['msg'] = 'Berhasil menambahkan data lokasi';
        header('location: location_screen.php');
    }
} elseif ($action == 'edit') {
    $idLokasi = $_GET['idLokasi'];

    $namaLokasi = $_POST['nama_lokasi'];
    $alamatLokasi = $_POST['alamat_lokasi'];

    $updateDataLoc = $connection->updateDataLocation($idLokasi, $namaLokasi, $alamatLokasi);
    if ($updateDataLoc) {
        $_SESSION['msg'] = 'Proses update data lokasi berhasil';
        header("location: location_screen.php");
    } else {
        echo "error";
    }
} elseif ($action == 'delete') {
    $idLokasi = $_GET['idLokasi'];
    $connection->deleteDataLocation($idLokasi);
    $_SESSION['msg'] = 'Berhasil menghapus data lokasi';
    header('location: location_screen.php');
}
die;

// $queryRegist = "INSERT INTO `pengguna`(`nik`, `username`, `password`, `nm_lengkap`, `email`, `level`, `jk`, `alamat`, `no_telp`, `tgl_lhr`, `tmpt_lhr`) VALUES('" . $nik . "', '" . $username . "', '" . $password . "', '" . $nmLengkap . "', '" . $email . "', 'masyarakat', '" . $jk . "', '" . $alamat . "', '" . $noTelp . "', '" . $tglLahir . "', '" . $tmpLahir . "')";

// $registResult = mysqli_query($connection, $queryRegist);

// if ($registResult) {
//     echo "berhasil Menambahkan data";
// } else {
//     echo "gagal Menambahkan data";
// }
