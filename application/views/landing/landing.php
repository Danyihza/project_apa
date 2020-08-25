<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Selamat Datang <?= $user['name'] ?></title>
    <link rel="icon" href="<?= base_url('assets/landing/') ?>img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/landing/') ?>css/style.css">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?= base_url('assets/landing/') ?>img/favicon.png" alt="logo" width="48px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="d-none d-lg-block dropdown">
                                    <a class="btn_1 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Halo, <?= $user['name'] ?></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('landing/editData'); ?>">Update Data Diri</a>
                                        <a class="dropdown-item " href="<?= base_url('landing/logout'); ?>">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Are You Ready ?</h5>
                            <h1>Tes Tahap 1 : Tes Tulis</h1>
                            <p>Klik tombol Lihat Kode Tes untuk melihat kode unik, Tes Tulis akan dibuka pada Hari Selasa 25 Agustus 2020 pukul 08.00 - 10.00 WIB </p>
                            <?php if (time() >= 1598284006 && time() <= 1598324400) : ?>
                                <a href="https://forms.gle/V4hpx5KLM2NHKsc69" target="_blank" class="btn_1">Lakukan Tes</a>
                            <?php endif; ?>
                            <a href="#" class="btn_2" data-toggle="modal" data-target="#exampleModal">Lihat Kode Tes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kode Unik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h1><b><u><?= $user['unique_code'] ?></u></b></h1>
                </div>
            </div>
        </div>
    </div>



    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?= base_url('assets/landing/') ?>js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url('assets/landing/') ?>js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url('assets/landing/') ?>js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url('assets/landing/') ?>js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url('assets/landing/') ?>js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url('assets/landing/') ?>js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?= base_url('assets/landing/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/landing/') ?>js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url('assets/landing/') ?>js/slick.min.js"></script>
    <script src="<?= base_url('assets/landing/') ?>js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/landing/') ?>js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url('assets/landing/') ?>js/custom.js"></script>
</body>

</html>