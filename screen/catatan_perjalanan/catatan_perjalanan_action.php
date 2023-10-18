<?php

include "../../connection.php";

$data_suhu_tubuh   = $_POST['suhu_tubuh'];
$data_id_lokasi    = $_POST['id_lokasi'];
$data_nik          = $_POST['nik'];
$data_tgl          = $_POST['tgl'];
$data_jam          = $_POST['jam'];

$connection = new database();
$action = $_GET['action'];
if ($action == 'add') {
    $connection->addCatatanPerjalanan($data_nik, $data_tgl, $data_jam, $data_suhu_tubuh, $data_id_lokasi);
    header("location: ../home/home_screen.php");
}
