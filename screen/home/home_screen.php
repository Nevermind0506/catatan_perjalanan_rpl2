<?php session_start(); ?>
<?php include "../../utils/start.php"; ?>


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../../assets/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNav" aria-labelledby="offcanvasNavbarLabel">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item">
                    <a class="nav-link px-4 active" href="#beranda">Beranda</a>
                </li>
                <?php if ($_SESSION['levelLogin'] == 'admin') { ?>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#beranda">List Lokasi</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link px-4" href="#beranda">Tentang SATUSEHAT</a>
                </li>
                <li class="nav-item">
                    <a href="../../logout.php">
                        <button type="button" class="btn btn-outline-success ms-4 px-5" onclick="confirm('Anda yakin untuk Logout?')">Keluar</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
<div class="mt-5">
    <br>
    <p><?php echo $_SESSION['nmLengkapLogin'] ?></p>
    <br>
    <p><?php echo $_SESSION['levelLogin'] ?></p>

</div>

<?php include "../../utils/end.php"; ?>