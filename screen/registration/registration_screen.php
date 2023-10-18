<?php session_start(); ?>
<?php include "../../utils/start.php"; ?>

<?php if (!empty($_SESSION['nikLogin'])) {
    header('location: ../home/home_screen.php');
} ?>



<div class="row">
    <div class="d-flex justify-content-center">
        <div class="col-lg-5 pt-4">
            <!-- headline -->
            <h1 class="text-center mb-5" style="font-weight: bolder;">Registrasi ke SATUSEHAT <br> Dashboard</h1>
            <form action="registration_action.php?action=add" method="POST">
                <!-- nik -->
                <div class="mb-3">
                    <label for="nik" class="form-label ">NIK</label>
                    <input name="nik_input" type="number" class="form-control form-control-md" id="nik" placeholder="Masukan Nomor Induk Kependudukan anda">
                </div>
                <!-- username -->
                <div class="mb-3">
                    <label for="username" class="form-label ">Username</label>
                    <input name="username_input" type="text" class="form-control form-control-md" id="username" placeholder="Masukan Username">
                </div>
                <!-- password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password_input" type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukkan password">
                </div>
                <!-- nama lengkap -->
                <div class="mb-3">
                    <label for="nmLengkap" class="form-label ">Nama Lengkap</label>
                    <input name="nama_lengkap_input" type="text" class="form-control form-control-md" id="nmLengkap" placeholder="Masukan Nama Lengkap" required>
                </div>
                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label ">Email</label>
                    <input name="email_input" type="email" class="form-control form-control-md" id="email" placeholder="Masukan alamat email" required>
                </div>
                <!-- jenis kelamin -->
                <div class="mb-3">
                    <label for="jk" class="form-label ">Jenis Kelamin</label>
                    <div class="switch-field">
                        <input type="radio" id="radio-one" name="jk_input" value="L" checked />
                        <label for="radio-one">Laki-laki</label>
                        <input type="radio" id="radio-two" name="jk_input" value="P" />
                        <label for="radio-two">Perempuan</label>
                    </div>
                </div>
                <!-- nomo telepon -->
                <div class="mb-3">
                    <label for="noTelp" class="form-label ">Nomor Telepon</label>
                    <input name="no_telp_input" type="number" class="form-control form-control-md" id="noTelp" placeholder="Masukan nomor telepon" required>
                </div>
                <!-- tanggal lahir -->
                <div class="mb-3">
                    <label for="tglLahir" class="form-label ">Tanggal Lahir</label>
                    <input name="tgl_lahir_input" type="date" class="form-control form-control-md" id="tglLahir" placeholder="Masukan tanggal lahir" required>
                </div>
                <!-- tempat lahir -->
                <div class="mb-3">
                    <label for="tmpLahir" class="form-label ">Tempat Lahir</label>
                    <input name="tmp_lahir_input" type="text" class="form-control form-control-md" id="tmpLahir" placeholder="Masukan tempat lahir" required>
                </div>
                <!-- alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label ">Alamat</label>
                    <textarea name="alamat_input" id="alamat" class="form-control" placeholder="Masukan Alamat" required></textarea>
                </div>



                <!-- submit button -->
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "../widgets/footer.php" ?>



<?php include "../../utils/end.php"; ?>