<?php session_start();

if (empty($_SESSION['nikLogin'])) {
    header('location: ../login/login_screen.php');
}
?>
<?php
include "../../connection.php";
$db = new database();
$dataBarang = $db->ShowDataLocation();
?>

<!-- Page Index -->
<?php $_SESSION['pageIndex'] = 1; ?>


<?php include "../../utils/start.php"; ?>
<?php include "../widgets/navbar.php" ?>


<div class="row">
    <div class="col-lg-12 mt-5 pt-2">
        <div class="container">
            <?php
            if (isset($_SESSION['msg'])) {
            ?>
                <div class="alert alert-info" role="alert">
                    <?= $_SESSION['msg']; ?>
                </div>
            <?php

            }
            ?>
            <!-- Button tambah lokasi modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahLokasi">
                Tambah Lokasi
            </button>

            <!-- tambah lokasi modal -->
            <div class="modal fade" id="tambahLokasi" tabindex="-1" aria-labelledby="tambahLokasiModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="location_action.php?action=add" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahLokasiModalLabel">Tambah Lokasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="location_action.php" method="post">
                                    <!-- nama lokasi -->
                                    <div class="mb-3">
                                        <label for="nmLokasi" class="form-label ">Nama Lokasi</label>
                                        <input name="nmLokasi_input" type="text" class="form-control form-control-md" id="nmLokasi" placeholder="Masukan nama lokasi">
                                    </div>
                                    <!-- alamat lokasi -->
                                    <div class="mb-3">
                                        <label for="nmAlamat" class="form-label">Alamat</label>
                                        <textarea name="nmAlamat_input" class="form-control" id="nmAlamat" rows="3" placeholder="Masukan Alamat" style="max-height: 100px; max-width: 500px;"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-striped">
                <tr class="text-center">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Alamat Lokasi</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($dataBarang as $row) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_lokasi']; ?></td>
                        <td><?php echo $row['nama_lokasi']; ?></td>
                        <td><?php echo $row['alamat_lokasi']; ?></td>
                        <td>
                            <button class="btn btn-warning"><a style="text-decoration: none;" class="text-white" href="location_edit_screen.php?action=update&idLokasi=<?php echo $row['id_lokasi']; ?>">Update</a></button>
                            <button class="btn btn-danger" onclick="confirm('Apakah anda yakin ingin menghapus data ini?')"><a class="text-white" style="text-decoration: none;" href="location_action.php?action=delete&idLokasi=<?php echo $row['id_lokasi']; ?>">Delete</a></button>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include "../../utils/end.php"; ?>