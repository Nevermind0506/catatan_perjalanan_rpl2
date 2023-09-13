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
                <li class="nav-item">
                    <a class="nav-link px-4" href="#beranda">Dasbor Publik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4" href="#beranda">Tentang SATUSEHAT</a>
                </li>
                <li class="nav-item">
                    <a href="../login/login_screen.php">
                        <button type="button" class="btn btn-outline-success ms-4 px-5">Masuk</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Section 1 Start -->
<div class="row">
    <div class="col-lg-12 pt-5" style="background-image: linear-gradient(#39a69cff, #9ec862ff);">
        <div class="container">
            <div class="row pt-5 my-4">
                <div class="col-lg-8">
                    <div class="row py-auto">
                        <h1 class="text-white text mt-5">SATUSEHAT Dasbor</h1>
                        <h1 class="text-white text">untuk Satu Indonesia</h1>
                        <p class="text-white mt-3">Pusat data kesehatan Indonesia yang menyajikan informasi interaktif dalam bentuk dasbor.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="../../assets/images/home-web-img.png" style="width: 350px;" alt="">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section 1 End -->
<!-- Section 2 Start -->
<div class="row">
    <div class="col-lg-12">
        <div class="container">
            <div class="row pt-5 my-5">
                <div class="col-lg-4">
                    <img class="img-fluid" src="../../assets/images/index_satu_data.png" style="width: 350px;" alt="">

                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <h1 class=" text mt-5">Mengapa SATUSEHAT</h1>
                        <h1 class=" text">Dasbor?</h1>
                        <p class=" mt-3">Portal SATUSEHAT yang menjadi sumber data dan informasi kesehatan Indonesia dalam bentuk dasbor interaktif untuk mendukung pengawasan, perumusan kebijakan dan pengambilan keputusan yang terukur serta tepat sasaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section 2 End -->
<!-- Section 3 Start -->
<div class="row">
    <div class="col-lg-12" style="background-color: #a2c95fff;">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class=" pb-4 text-center text-white">Misi SATUSEHAT Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <center>
                        <img class="mb-3" src="../../assets/images/index_aksesibilitas.png" alt="">

                        <h5 class="text-white">Aksesibilitas</h5>

                        <p class="text-white">
                            Menyediakan data yang mudah diakses untuk semua
                        </p>
                    </center>

                </div>
                <div class="col-lg-4">
                    <center>
                        <img class="mb-3" src="../../assets/images/index_validitas.png" alt="">

                        <h5 class="text-white">Validitas</h5>

                        <p class="text-white">
                            Memastikan ketepatan data yang disampaikan kepada publik
                        </p>
                    </center>
                </div>
                <div class="col-lg-4">
                    <center>
                        <img class="mb-3" src="../../assets/images/index_akuntabilitas.png" alt="">

                        <h5 class="text-white">Akuntabilitas</h5>

                        <p class="text-white">
                            Menyajikan data yang dapat dipertanggung jawabkan
                        </p>
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section 3 End -->
<!-- Section 4 Start -->
<div class="row" style="background-color: #f8f9faff;">
    <div class="col-lg-12">
        <div class="container">
            <div class="row pt-5 my-5">
                <div class="col-lg-4">
                    <img class="img-fluid" src="../../assets/images/index_dashboard_public.png" style="width: 350px;" alt="">

                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <h1 class=" text mt-5">Dasbor Publik</h1>

                        <p class=" mt-3">Menu Dasbor Publik ini merupakan kumpulan dasbor interaktif kesehatan yang disediakan oleh Kementerian Kesehatan untuk dapat diakses publik. Dasbor publik ini memvisualisasikan data terkait kesehatan.</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="" class="btn btn-lg text-light" style="background-color: #9fc860ff;"><small>Lihat sekarang</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section 4 End -->
<!-- Section Footer Start -->
<footer>
    <div class="container py-3">
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