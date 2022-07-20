<?php
$nama = '';
$jarak = '';
$harga = 0;
if (isset($_POST['submit'])) {
	// file ini digunakan untuk menyimpan hasil pencarian user ke dalam file txt
	// jika sudah maka tambahkan ke dalam file txt
	$nama = $_POST['nama'];
	$jarak = $_POST['jarak'];
	$harga = intval($jarak) * 5000;
	// cek apakah file txt sudah ada?
	if (file_exists("process.txt")) {
		// jika sudah ada, tulis ke dalam file txt
		$file = fopen("process.txt", "a");
		fwrite($file, "\n" . $nama . "|" . $jarak . "|" . $harga);
		fclose($file);
	} else {
		// jika belum ada, buat file txt
		$file = fopen("process.txt", "w");
		fwrite($file, $nama . "|" . $jarak . "|" . $harga);
		fclose($file);
	}
	// menutup file txt
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Website Pencarian Harga Kirim</title>
	<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
	<link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/aos/css/aos.css">
	<link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="images/favicon.png" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="mobile-menu-overlay"></div>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Marshmallow"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
					<img src="images/logo-dark.svg" class="logo-mobile-menu" alt="logo">
					<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
				</div>
				<ul class="navbar-nav ml-auto align-items-center">
					<li class="nav-item">
						<a class="nav-link btn btn-success" href="list.php">Owner</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-body-wrapper">
		<section id="home" class="home">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="main-banner">
							<div class="d-sm-flex justify-content-between">
								<div data-aos="zoom-in-up">
									<div class="banner-title">
										<h3 class="font-weight-medium">We Help Power
											Millions Of Businesses
											in 100+ Countries
										</h3>
									</div>
									<p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting
										industry.

										<br>
										Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
									</p>
									<a href="#" class="btn btn-secondary mt-3">Learn more</a>
								</div>
								<div class="mt-5 mt-lg-0">
									<img src="images/logo.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="our-process" id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-6" data-aos="fade-up">
						<h5 class="text-dark">Our work process</h5>
						<h3 class="font-weight-medium text-dark">Discover New Idea With Us!</h3>
						<h5 class="text-dark mb-3">Imagination will take us everywhere</h5>
						<p class="font-weight-medium mb-4">Lorem ipsum dolor sit amet, <br>
							pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur
						</p>
						<div class="d-flex justify-content-start mb-3">
							<img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
							<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
						</div>
						<div class="d-flex justify-content-start mb-3">
							<img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
							<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
						</div>
						<div class="d-flex justify-content-start">
							<img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
							<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
						</div>
					</div>
					<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
						<img src="images/idea.png" alt="idea" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<section class="contactus" id="contact">
			<div class="container">
				<div class="row mb-5 pb-5">
					<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
						<img src="images/search.png" alt="contact" class="img-fluid">
					</div>
					<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
						<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Find Out Your Price</h3>
						<h5 class="text-dark mb-5">Input Your Name and Range to Get Your Price</h5>
						<form id="form" method="POST">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<span class="">
											<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
										</span>
									</div>
								</div>
								<div class="col-sm-12 mb-3">
									<div class="form-group">
										<div class="position-relative ">
											<input type="text" class="form-control mb-2" id="jarak" name="jarak" placeholder="Jarak">
											<span class="position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<span class="text-muted">x Rp. 5.000</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 mb-3">
									<div class="form-group">
										Harga : <span id="result"></span>
									</div>
								</div>
								<div class="col-sm-12">
									<button type="submit" name="submit" class="btn btn-secondary">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="footer-bottom">
			<div class="container">
				<p class="mb-0 text-small pt-1 text-center">© 2019-2020 All rights reserved.</p>
			</div>
		</div>
	</footer>
	<script src="vendors/base/vendor.bundle.base.js"></script>
	<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
	<script src="vendors/aos/js/aos.js"></script>
	<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
	<script src="js/template.js"></script>
	<script>
		// cek apakah user sudah mengisi form
		var nama = document.getElementById('nama');
		var jarak = document.getElementById('jarak');
		$('button[name="submit"]').click(function(e) {
			if (nama.value == '') {
				alert('Silahkan isi nama anda');
				nama.focus();
				return false;
			} else if (jarak.value == '') {
				alert('Silahkan isi jarak anda');
				jarak.focus();
				return false;
			} else {
				// jika sudah isi, maka akan mengirimkan data ke server
				var form = document.getElementById('form');
				$(form).submit();
			}
		});
		document.getElementById('nama').value = '<?= $nama ?>';
		document.getElementById('jarak').value = '<?= $jarak ?>';
		var result = '<?= $harga ?>';
		result = result.replace(/\D/g, '');
		result = result.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
		document.getElementById('result').innerHTML = 'Rp. ' + result;
	</script>
</body>

</html>