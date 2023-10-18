<?php
session_start();
if (empty($_SESSION['nikLogin'])) {

    header("location: ../login/login_screen.php");
}
include "../../connection.php";
$db = new database();
$nik = $_SESSION['nikLogin'];

?>


<!-- Page Index -->
<?php $_SESSION['pageIndex'] = 0; ?>
<?php include "../../utils/start.php"; ?>
<?php include "../widgets/navbar.php"; ?>
<div class="mt-5 pt-5">
    <div class="container">
        <div class="row ">
            <div class="card bg-info mb-2">
                <div class="card-body">
                    <p class="text-light">Selamat datang <?php echo $_SESSION['nmLengkapLogin']; ?>, di aplikasi SATU SEHAT</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- kiri -->
                <div class="row">
                    <div class="col-lg-6">
                        <p>
                            SATUSEHAT Dashboard dibangun dan dikembangkan sebagai pusat portal satu informasi Kesehatan di Indonesia baik untuk lingkup publik maupun internal Kementerian Kesehatan. Portal ini dibuat untuk menjawab permasalahan dimana dasbor / informasi kesehatan saat ini masih terpencar di berbagai lokasi. Sehingga kehadiran satu portal ini diharapkan mampu mempermudah baik internal Kementerian Kesehatan maupun masyarakat umum dalam mengakses informasi.
                        </p>
                    </div>
                    <!-- kanan -->
                    <div class="col-lg-6">
                        <!-- atas kanan -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4 my-auto text-center">
                                                    <i class="bi bi-person-walking" style="font-size: 40px;"></i>

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Perjalanan</h5>
                                                        <p class="card-text"><?php echo $db->countDataHisPer($nik); ?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4 my-auto text-center">
                                                    <i class="bi bi-geo-alt-fill" style="font-size: 40px;"></i>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Lokasi</h5>
                                                        <p class="card-text"><?php echo $db->countLokasi(); ?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4 my-auto text-center">
                                                    <i class="bi bi-people-fill" style="font-size: 40px;"></i>

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Pengguna</h5>
                                                        <p class="card-text"><?php echo $db->countDataPengguna(); ?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "../../utils/end.php"; ?>