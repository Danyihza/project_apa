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

    <!-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Are You Ready ?</h5>
                            <h1>Tes Tahap 1 : Tes Tulis</h1>
                            <p>Klik tombol Lihat Kode Tes untuk melihat kode unik, Tes Tulis akan dibuka pada Hari Selasa 25 Agustus 2020 pukul 08.00 - 10.00 WIB </p>
                            <a href="https://forms.gle/V4hpx5KLM2NHKsc69" target="_blank" class="btn_1">Lakukan Tes</a>
                            <a href="#" class="btn_2 tmbl test" id="tmbl" data-toggle="modal" data-target="#exampleModal">Lihat Kode Tes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <?php if (time() >= 1598493600) : ?>
                                <h5>It's Time!</h5>
                            <?php else : ?>
                                <h5>Coming Soon</h5>
                            <?php endif ?>
                            <h1>Pengumuman Tes Tahap 1 : Tes Tulis</h1>

                            <?php if (time() >= 1598493600) : ?>
                                <p>Untuk melihat pengumuman tes tulis, tekan tombol dibawah ini lalu ketik password anda lalu klik Lihat Pengumuman kemudian akan tampil hasilnya, Semangat!</p>
                            <?php endif ?>
                            <?php if (time() >= 1598493600) : ?>
                                <a href="javascript:void(0)" class="btn_1 tmbl test" id="tmbl" data-toggle="modal" data-target="#exampleModal" style="width: 487px;text-align: center;">Lihat Pengumuman</a>
                            <?php else : ?>
                                <a href="javascript:void(0)" class="btn_2" style="width: 487px;text-align: center;">Coming Soon...</a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <!-- <script src="<?= base_url('assets/landing/') ?>js/jquery-1.12.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <!-- My JS -->
    <script src="<?= base_url('assets/landing/') ?>js/myjs.js"></script>
</body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" placeholder="Confirm Your Password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger pengumuman" id="pengumuman">Lihat Pengumuman</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#pengumuman').on('click', function() {
        const password = $('#pass').val()
        if (password.length === 0) {
            $('#pass').addClass('is-invalid')
        } else {
            $('.modal-body').html(`
        <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        `)
            $('.modal-body').addClass('text-center')
            $('#pengumuman').attr('disabled', true)
            $('#pengumuman').html('Please wait...')
        }

        $.ajax({
            url: '<?= base_url('api/Main/hashPass/') ?>',
            method: 'POST',
            data: {
                email: '<?= $this->session->userdata('email') ?>',
                password: password
            },
            dataType: 'json',
            success: function(data) {
                const result = data
                console.log(result)
                if (result.status === 1) {
                    $('#pengumuman').remove()
                    console.log(result.data.is_active)
                    if (result.data.is_active == 2) {
                        $('.modal-body').html(`
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Selamat!</h4>
                            <p>Kamu Lolos Di tahap Selanjutnya</p>
                            <hr>
                            <p class="mb-0">Persiapkan dirimu untuk menghadapi Tes Tahap berikutnya, Semangat!</p>
                        </div>
                        `)
                    } else {
                        $('.modal-body').html(`
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Mohon Maaf!</h4>
                            <p>Perjalanan Kamu Berhenti Sampai Disini :(</p>
                            <hr>
                            <p class="mb-0">Tetap Semangat dan Jangan Bersedih Karna Ada Kesempatan di G10</p>
                        </div>
                        `)
                    }

                } else {
                    $('.modal-body').removeClass('text-center').delay(2000)
                    $('#pengumuman').removeAttr('disabled').delay(2000)
                    $('#pengumuman').html('Lihat Pengumuman').delay(2000)
                    $('.modal-body').html(`
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control is-invalid" id="pass" placeholder="Confirm Your Password" required>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            Wrong Password
                        </div>
                    <div>
                    `).delay(2000)
                }
            }
        })
    })
</script>

</html>