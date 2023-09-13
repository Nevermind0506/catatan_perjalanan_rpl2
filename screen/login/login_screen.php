<?php include "../../utils/start.php"; ?>
<?php include "../../connection.php" ?>


<?php $data = new database() ?>
<div class="row">
    <div class="d-flex justify-content-center">
        <div class="col-lg-5 pt-4">
            <!-- headline -->
            <h1 class="text-center mb-5" style="font-weight: bolder;">Masuk ke SATUSEHAT <br> Dashboard</h1>
            <?php if ($data->msg != null) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $data->msg; ?>
                </div>
            <?php
            }
            ?>
            <form action="login_action.php?action=log" method="POST">


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


                <!-- submit button -->
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                <p>Belum punya akun? <a href="../registration/registration_screen.php">Daftar</a> sekarang!</p>
            </form>
        </div>
    </div>
</div>



<?php include "../../utils/end.php"; ?>