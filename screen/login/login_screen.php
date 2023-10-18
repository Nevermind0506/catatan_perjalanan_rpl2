<?php include "../../utils/start.php"; ?>
<?php include "../../connection.php" ?>
<?php if (!empty($_SESSION['nikLogin'])) {
    header('location: ../home/home_screen.php');
} ?>

<?php $data = new database() ?>
<div class="row">
    <div class="d-flex justify-content-center">
        <div class="col-lg-5 pt-4">
            <!-- headline -->
            <h1 class="text-center mb-5" style="font-weight: bolder;">Masuk ke SATUSEHAT <br> Dashboard</h1>
            <?php
            if (isset($_SESSION['msg'])) {
                echo "<div class='alert alert-warning' role='alert'>
                " . $_SESSION['msg'] . "
              </div>";
            }
            ?>
            <form action="login_action.php?action=log" method="POST">


                <!-- username -->
                <div class="mb-3">
                    <label for="username" class="form-label ">Username</label>
                    <input name="username_input" type="text" class="form-control form-control-md" id="username" placeholder="Masukan Username">
                </div>
                <!-- password -->
                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input name="password_input" type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukkan password">
                </div>


                <!-- submit button -->
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </div>
                <p>Belum punya akun? <a href="../registration/registration_screen.php">Daftar</a> sekarang!</p>
            </form>
        </div>
    </div>
</div>
<!-- Section Footer Start -->
<footer class="sticky bottom">
    <div class="container pt-5 mt-4">
        <div class="row">
            <div class="col-md-8">
                <a href="" class="nav-link footer-link" style="font-size: 13px;">© 2023 Pusat Data dan Teknologi Informasi. Kementerian Kesehatan Republik Indonesia</a>
            </div>
            <div class="col-md-4 custom-footer text-center" style="display: flex; justify-content: flex-end; font-size: 13px;">
                <a href="#" class="nav-link pe-2 footer-link">Peta Situs</a>
                <a href="#" class="nav-link pe-2 footer-link">Kebijakan Privasi</a>
                <a href="#" class="nav-link footer-link">Syarat Penggunaan</a>
            </div>
        </div>

    </div>
</footer>
<!-- Section Footer End -->



<?php include "../../utils/end.php"; ?>