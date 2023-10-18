<?php session_start();
include '../../connection.php';
$db = new database();
$dataLokasi = $db->ShowDataLocation();
?>


<!-- Page Index -->
<?php $_SESSION['pageIndex'] = 1; ?>
<?php include "../../utils/start.php"; ?>
<?php include "../widgets/navbar.php"; ?>
<div class="row mt-5">
    <div class="d-flex justify-content-center">
        <div class="col-lg-5 pt-4">
            <!-- headline -->
            <h1 class="text-center mb-5" style="font-weight: bolder;">Catatan Perjalanan <br></h1>
            <form action="catatan_perjalanan_action.php?action=add" method="POST">


                <!-- username -->
                <div class="mb-3">
                    <label for="suhu" class="form-label ">Suhu Tubuh</label>
                    <input name="suhu_tubuh" type="number" class="form-control form-control-md" id="suhu" placeholder="Masukan Suhu Tubuh Anda" required>
                </div>

                <!-- password -->
                <div class="mb-5">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <select name="id_lokasi" class="form-select" aria-label="Default select example" name="id_lokasi" required>
                        <?php
                        foreach ($dataLokasi as $dLok) {
                        ?>
                            <option value="<?= $dLok['id_lokasi']; ?>"><?= $dLok['nama_lokasi']; ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
                <input type="hidden" name="nik" value="<?= $_SESSION['nikLogin']; ?>" required>
                <input type="hidden" name="tgl" value="<?= date('Y-m-d'); ?>" required>
                <?php date_default_timezone_set("Asia/jakarta"); ?>
                <input type="hidden" name="jam" value="<?= date('H:i:s'); ?>" required>


                <!-- submit button -->
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-primary form-control" type="submit">Simpan Catatan Perjalanan</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include "../../utils/end.php"; ?>