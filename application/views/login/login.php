<!DOCTYPE html>
<html lang="en">

<head>
	<title>OSKMTR 9G | Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/login/') ?>images/logo_oska.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="<?= base_url('auth/proses_login') ?>">
					<img class="mx-auto d-block mb-3" src="<?= base_url('assets/login/images/') ?>logo_oska.png" alt="" width="120px">
					<span class="login100-form-title p-b-43 font-weight-bold">
						Welcome to OSKMTR Recruitment
					</span>
					<!-- <span class="login100-form-title p-b-43">
						Please Login to Continue...
					</span> -->

					<?= $this->session->flashdata('message'); ?>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn login_button">
							Login
						</button>
					</div>
					<a href="<?= base_url('auth/registration'); ?>" class="login100-form-btn mb-3 mt-3">Daftar</a>


					<div class=" p-t-46 p-b-20">
						<div class="alert alert-warning" role="alert">
							<h4 class="alert-heading">Pengumuman</h4>
							<hr>
							<ol>
								<li>
									<p class="mb-1">- Untuk Semua Pendaftar Harap Login Untuk Mengecek Kolom Pengalaman Organisasi & Prestasi, Jika Belum Terisi Maka Isi Kembali</p>
									<p class="mb-1">- Tes Tulis dibuka pada Selasa 25 Agustus 2020 pukul 08.00 s/d 10.00 WIB</p>
								</li>
							</ol>
						</div>
					</div>


				</form>


				<div class="login100-more" style=" background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,1)), url('<?= base_url('assets/login/') ?>images/bg.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<script>
		$('.login_button').on('click', function() {
			$('.login_button').html('Please Wait...')			
		})
	</script>

	<?php if ($this->session->flashdata('done')) : ?>
		<script>
			$(document).ready(function() {
				Swal.fire({
					icon: 'success',
					title: 'Sukses',
					text: 'Data Berhasil di perbarui',
				})
			})
		</script>
	<?php endif; ?>

</body>

</html>