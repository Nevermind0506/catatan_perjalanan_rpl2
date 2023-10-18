<?php
include '../../connection.php';
$db = new database();
$nik = $_SESSION['nikLogin'];
$nama = $_SESSION['usernameLogin'];
// $lengthData = mysqli_num_rows($db->showHistoryPerjalanan($nik));
$sqlRes = $db->showHistoryPerjalanan($nik);



// echo $lengthData;


// echo $db->showHistoryPerjalanan($nik);




?>


<!-- Page Index -->
<?php $_SESSION['pageIndex'] = 1; ?>
<?php include "../../utils/start.php"; ?>
<?php include "../widgets/navbar.php"; ?>
<div class="row mt-5">
    <div class="d-flex justify-content-center">
        <div class="col-lg-5 pt-4 mt-5">
            <!-- headline -->
            <h1 class="text-center mb-5" style="font-weight: bolder;">Riwayat Perjalanan<br></h1>
            <div class="col-lg-12 mt-5 pt-2">
                <div class="container">


                    <table class="table table-striped">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Suhu Tubuh</th>
                            <th>Lokasi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($sqlRes as $resultData) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $resultData['tgl_perjalanan'] ?></td>
                                <td><?php echo $resultData['jam_perjalanan'] ?></td>
                                <td><?php echo $resultData['suhu_tubuh'] ?></td>
                                <td><?php echo $resultData['nama_lokasi'] ?></td>
                            </tr>
                        <?php }; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../../utils/end.php"; ?>