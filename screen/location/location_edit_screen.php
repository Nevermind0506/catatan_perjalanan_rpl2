<?php
include "../../connection.php";

include "../../utils/start.php";


$db = new database();



$connection = new database();
$action = $_GET['action'];
if ($action == 'update') {
    $idLokasi = $_GET['idLokasi'];
    echo $idLokasi;
    echo 'edit';
    $data = $db->getDataLocation($idLokasi);
?>
    <div class="row">
        <div class="col-lg-12 mt-5 pt-2">
            <div class="container">
                <h2>Form Edit Lokasi</h2>

                <form action="location_action.php?action=edit&idLokasi=<?php echo $data['id_lokasi'] ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Lokasi</label>
                        <input type="text" name="nama_lokasi" value="<?php echo $data['nama_lokasi']; ?>" class="form-control" placeholder="Example input placeholder">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Lokasi</label>
                        <input type="text" name="alamat_lokasi" value="<?php echo $data['alamat_lokasi']; ?>" class="form-control" placeholder="Another input placeholder">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Edit Data Lokasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
}
die;
include "../../utils/end.php"; ?>