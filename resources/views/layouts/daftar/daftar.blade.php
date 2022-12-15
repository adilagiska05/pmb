<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Dot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- theme meta -->
	<meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/daftar/plugins/bootstrap/bootstrap.min.css')}}">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="{{ asset('assets/daftar/plugins/themify-icons/themify-icons.css')}}">
	<!--Favicon-->
	<link rel="icon" href="{{ asset('assets/daftar/images/favicon.png')}}" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="{{asset('assets/daftar/style.css')}}" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	@include('layouts.includes.front.nav')
	<!-- <header class="banner overlay bg-cover" data-background="images/banner.jpg">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<a class="navbar-brand px-2" href="index.html">Dot</a>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> -->

	<section id="hero" class="hero d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">

					<h1 data-aos="fade-up" data-aos-delay="400">Jalur Penerimaan</h1>
					<h2 data-aos="fade-up">Silahkan pilih jalur tes penerimaan mahasiswa</h2>
					<div data-aos="fade-up" data-aos-delay="600">

					</div>
				</div>
			</div>

		</div>
		</div>

	</section>

	<!-- <div class="collapse navbar-collapse text-center" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-dark" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="faq.html">Faq</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="contact.html">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="single.html">Inner Page</a>
						</li>
					</ul>
				</div> -->
	<!-- </div>
		</nav>
    banner 
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">Support Center &amp; Knowledge base</h1>
					<p class="text-white mb-4">Find advice and answers from our support team fast or get in touch</p>
					<div class="position-relative">
					<input id="search" class="form-control" placeholder="Have a question? Just ask here or enter terms"><i
							class="ti-search search-icon"></i> 
				</div>
			</div>
		</div>
	 /banner 
	</header>
	 /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-left">
					<p>PMB___________________</p>
					<h2 class="section-title">JALUR PROGRAM</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="jalur/form" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<p class="mb-0">01 Desember s/d 15 Desember 2022</p>
						<div>
							<button class="formbold-btn">REGULER JENJANG S1</button>
						</div>

					</a>
				</div>


				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="jalur/form" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p>
					</a>
				</div>


				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="jalur/form" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<p class="mb-0">01 Desember s/d 15 Desember 2022</p>
						<div>
							<button class="formbold-btn1">JENJANG S2 MAGISTER</button>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	<!-- call to action -->
	<!-- <section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section px-3 bg-white shadow text-center">
						<h2 class="mb-4">Didn&rsquo;t find an answer to your question?</h2>
						<p class="mb-4">Musce libero nunc, dignissim quis turpis quis, semper vehicula dolor. Suspendisse tincidunt
							consequat quam.</p>
						<a href="contact.html" class="btn btn-primary">contact us</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- /call to action -->

	<!-- footer -->
	<footer id="footer" class="footer">

		<!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> 
        </div>
      </div>
    </div> -->

		<div class="footer-top">
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-5 col-md-12 footer-info">
						<a href="index.html" class="logo d-flex align-items-center">
							<img src="{{ asset('assets/front/img/inaba.png ')}}" widht="50" height="60" alt="">
							<span>INABA</span>
						</a>
						<p><i>Jika ada hal yang kurang jelas, silakan menghubungi kami ke</i></p>
						<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">

							<p>

								<strong>Phone: +155895548855</strong> <br>
								<strong>Email: info@example.com</strong><br>
							</p>

						</div>
						<div class="social-links mt-3">
							<a href="https://twitter.com/humasinaba?lang=id" class="twitter"><i
									class="bi bi-twitter"></i></a>
							<a href="https://www.facebook.com/HumasMarketingStieInabaBandung/" class="facebook"><i
									class="bi bi-facebook"></i></a>
							<a href="https://www.instagram.com/inabauniversityofficial/?hl=id" class="instagram"><i
									class="bi bi-instagram"></i></a>


						</div>
					</div>

					<div class="col-lg-2 col-6 footer-links">
						<h4>Link Terkait</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="https://portal.inaba.ac.id/">Sistem
									Informasi Akademik</a></li>
							<li><i class="bi bi-chevron-right"></i> <a
									href="https://elearning.inaba.ac.id/">E-Learning</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="https://journals.inaba.ac.id/">E-Jurnal</a>
							</li>
							<li><i class="bi bi-chevron-right"></i> <a href="https://opaclib.inaba.ac.id/">E-Library</a>
							</li>
							<li><i class="bi bi-chevron-right"></i> <a
									href="https://repository.inaba.ac.id/">Repository</a></li>
						</ul>
					</div>

					<div class="col-lg-2 col-6 footer-links">
						<h4>Link Terkait</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="https://pmb.inaba.ac.id/">Penerimaan
									Mahasiswa Baru</a></li>
							<li><i class="bi bi-chevron-right"></i> <a
									href="https://kemahasiswaan.inaba.ac.id/">Kemahasiswaan INABA</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="">Tracer Study Mahasiswa</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="">Website Kampus INABA JAKARTA</a></li>

						</ul>
					</div>



				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>
	<!-- <footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
					<p class="mb-md-0 mb-4">Copyright © 2020 Designed and Developed by <a
							href="https://themefisher.com/">themefisher</a></p>
				</div>
				<div class="col-md-4 text-md-right text-center">
					<ul class="list-inline">
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
						</li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer> -->
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="{{ asset('assets/daftar/plugins/jquery/jquery-1.12.4.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/daftar/plugins/bootstrap/bootstrap.min.js')}}"></script>
	<!-- match-height JS -->
	<script src="{{ asset('assets/daftar/plugins/match-height/jquery.matchHeight-min.js')}}"></script>
	<!-- Main Script -->
	<script src="{{ asset('assets/daftar/script.js')}}"></script>
</body>

</html>