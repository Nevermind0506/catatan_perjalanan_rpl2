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
                    <a class="nav-link px-4 <?php ($_SESSION['pageIndex'] == 0) ? (print 'active') : (print ''); ?>" href="../home/home_screen.php">Beranda</a>
                </li>
                <?php if (!empty($_SESSION['levelLogin'] == 'admin')) { ?>
                    <li class="nav-item">
                        <a class="nav-link px-4 <?php ($_SESSION['pageIndex'] == 1) ? (print 'active') : (print ''); ?>" href="../location/location_screen.php">List Lokasi</a>
                    </li>
                <?php } elseif (!empty($_SESSION['levelLogin'] == 'masyarakat')) { ?>
                    <li class="nav-item">
                        <a class="nav-link px-4 <?php ($_SESSION['pageIndex'] == 1) ? (print 'active') : (print ''); ?>" href="../catatan_perjalanan/catatan_perjalanan_screen.php">Buat Catatan</a>
                    </li>
                <?php } ?>


                <?php if (!empty($_SESSION['levelLogin'] == 'masyarakat')) { ?>
                    <li class="nav-item">
                        <a class="nav-link px-4 <?php ($_SESSION['pageIndex'] == 2) ? (print 'active') : (print ''); ?>" href="../history_perjalanan/history_perjalanan_screen.php">Riwayat Perjalanan</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="../../logout.php">
                        <button type="button" class="btn btn-outline-success ms-4 px-5" onclick="return(confirm('Apakah anda yakin untuk logout?'))">Keluar</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->