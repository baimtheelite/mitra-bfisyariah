@extends('main')

@section('content')
		<!-- Preloader -->
	<div class="preLoader">
		<div class="preload-inner">
			<div class="sk-cube-grid">
				<div class="sk-cube sk-cube1"></div>
				<div class="sk-cube sk-cube2"></div>
				<div class="sk-cube sk-cube3"></div>
				<div class="sk-cube sk-cube4"></div>
				<div class="sk-cube sk-cube5"></div>
				<div class="sk-cube sk-cube6"></div>
				<div class="sk-cube sk-cube7"></div>
				<div class="sk-cube sk-cube8"></div>
				<div class="sk-cube sk-cube9"></div>
			</div>
		</div>
	</div>
	<!-- End Of Preloader -->

	<!-- Main header -->
	<header class="header">

		<div class="main-header">
			<div class="main-menu-wrap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-3 col-md-4 col-6">

							<div class="logo">
								<a href="index.html">
									<img src="assets/img/bfi.png" data-rjs="2" alt="BFI Syariah" width="150px"
										height="75px">
								</a>
							</div>

						</div>
						<div class="col-xl-6 col-lg-6 col-md-4 col-6 menu-button">
							<div class="menu--inner-area clearfix">
								<div class="menu-wraper">
									<nav>

										<!-- <div class="header-menu dosis">
                                            <ul>
                                                <li><a href="#features">Features</a></li>
                                                <li><a href="#rekan">kerjasama</a></li>
                                            </ul>
                                        </div> -->
										<div class="mobile text-right">
											<a href="https://wa.me/6289655333987?text=Hi,%20saya%20ingin%20bekerjasama%20dengan%20BFI%20Syariah"
												class="btn btn-resize">Whatsapp</a>
										</div>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-5 d-md-block d-none">
							<div class="urgent-call text-right">
								<a href="https://wa.me/6289655333987?text=Hi,%20saya%20ingin%20bekerjasama%20dengan%20BFI%20Syariah"
									class="btn btn-resize">Whatsapp</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<!-- End of Main header -->

	<!-- home banner area -->
	<div class="banner-area-inner">
		<div class="banner-inner-area banner-area1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8 col-lg-6 col-xl-5">
						<!-- banner text -->
						<div class="banner-text-inner">
							<div class="banner-shape-wrap">
								<div class="banner-shape-inner">
									<img src="assets/img/banner/shaps1.png" alt="" class='shape shape1 rotate3d'>
									<img src="assets/img/banner/shaps2.png" alt="" class='shape shape2 rotate2d'>
									<img src="assets/img/banner/shaps3.png" alt="" class='shape shape3 rotate-2d'>
									<img src="assets/img/banner/shaps4.png" alt="" class='shape shape4 rotate3d'>
									<img src="assets/img/banner/shaps5.png" alt="" class='shape shape5 rotate2d'>
									<img src="assets/img/banner/shaps6.png" alt="" class='shape shape6 rotate-2d'>
									<img src="assets/img/banner/shaps7.png" alt="" class='shape shape7 rotate3d'>
								</div>
							</div>

							<h1>BFI Syariah mitra bisnis terpercaya anda</h1>
							<p>Daftarkan usaha Anda di BFI Syariah dan tingkatkan penjualan bersama BFI Syariah dengan
								cicilan murni syariah.</p>
						</div>
						<!-- banner text -->
					</div>
					<div class="col-lg-5 offset-lg-1 col-md-4 offse-xl-2">
						<!-- banner image-->
						<div class="card banner-image shadow p-3 mb-5 bg-white rounded"
							style="border-radius: 10px; border: 0px; height: 610px;">
							<div class="card-body">
								<h3 class="">Jadilah Partner Kami</h3>
								<p style="font-size: 22px;">Dengan mengisi data dibawah ini.</p>
								<form id="PartnerSyariah" name="PartnerSyariah">
									<div class="form-group">
										<input class="form-control mb-3" type="text" name="Nama_Usaha" id=""
											placeholder="Nama Usaha" style="background-color: #F7F6F9;" required>
									</div>
									<div class="form-group">
										<input class="form-control mb-3" type="number" maxlength="13" name="Telepon"
											id="" placeholder="Telepon / WA" style="background-color: #F7F6F9;"
											required>
									</div>
									<div class="form-group">
										<input class="form-control mb-3" type="email" name="Email" id=""
											placeholder="Email" style="background-color: #F7F6F9;" required>
									</div>
									<div class="form-group">
										<select name="Bidang_Usaha" id="" class="form-control"
											style="background-color: #F7F6F9;" required>
											<option disabled selected value="">Pilih Bidang Usaha</option>
											<option value="Agregator">Agregator</option>
											<option value="Makanan & Minuman">Makanan & Minuman</option>
											<option value="Fashion">Fashion</option>
											<option value="Elektronik">Elektronik</option>
											<option value="Kendaraan">Kendaraan</option>
											<option value="Travel">Travel</option>
											<option value="Jasa Lainnya">Jasa Lainnya</option>
										</select>
									</div>
									<div class="form-group">
										<!-- <input class="form-control mb-3" type="text" name="" id=""
                                            placeholder="Bentuk Usaha" style="background-color: #F7F6F9;"> -->
										<select name="Bentuk_Usaha" id="" class="form-control"
											style="background-color: #F7F6F9;" required>
											<option disabled selected value="">Pilih Bentuk Usaha Anda</option>
											<option value="Perorangan">Perorangan</option>
											<option value="PD">PD</option>
											<option value="CV">CV</option>
											<option value="PT">PT</option>
										</select>
									</div>
									<div class="form-group">
										<input class="form-control mb-3" type="text" name="Kota" id=""
											placeholder="Kota" style="background-color: #F7F6F9;" required>
									</div>
									<div class="form-group">
										<button type="submit" class="btn margin btn-color" id="submit"
											style="border-radius: 10px; border: 2px solid #0855A0;">Kirim
											Data</button>
									</div>
								</form>
							</div>
						</div>
						<!--End of banner image-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of home banner area -->

	<!-- feature area -->
	<section class="pt-20 pb-50" id='features'>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-8">
					<!-- section title -->
					<div class="section-title text-center">
						<h2>Alasan Harus Kerjasama Dengan BFI Syariah</h2>
						<p>Kesempatan terbaik bagi usaha Anda untuk bertumbuh dan berkembang bersama kami </p>
					</div>
					<!-- End of section title -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-12">
					<div class="feature-carousel owl-carousel">
						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="assets/img/icons/gift.png" class="png" alt=""></div>
							<h5>Pembayaran Alternatif</h5>
							<p>Memberikan pilihan pembayaran alternatif untuk usaha Anda secara cicilan murni syariah
								kepada konsumen..</p>
						</div>
						<!-- End of single feature inner -->

						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="assets/img/icons/job-promotion.png" class="png" alt="">
							</div>
							<h5>Jangkauan Luas</h5>
							<p>Terdapat 45 cabang yang siap membantu memasarkan produk Anda kepada calon konsumen
								terbaik kami</p>
						</div>
						<!-- End of single feature inner -->

						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="assets/img/icons/safe.png" class="png" alt=""></div>
							<h5>Akad Murni Syariah</h5>
							<p>Akad jual-beli tanpa denda dan penalti bagi konsumen, dan pembayaran langsung ke
								Merchant/Partner</p>
						</div>
						<!-- End of single feature inner -->

						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="assets/img/icons/brochure.png" class="png" alt=""></div>
							<h5>Produk Yang Bervariasi</h5>
							<p>Pilihan produk yang banyak mulai dari umroh, wisata halal, renovasi,
								paket pernikahan, bahan bangunan, mesin, stok barang dagang, pendidikan, kursus/les,
								mobil dan lainnya</p>
						</div>
						<!-- End of single feature inner -->
					</div>
					<!--/.feature-carousel-->
				</div>
				<!--/.col-->
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</section><!-- End of feature area -->

	<!-- Counter up area -->
	<section class="border-top pt-50 pb-20" id="rekan">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- section title -->
					<div class="section-title text-center">
						<h2>Jaringan & Merchant</h2>
					</div>
					<!-- End of section title -->
				</div>
				<div class="col-md-4 col-sm-6">
					<!-- single counetr -->
					<div class="single-counter text-center">
						<span class="counter">220</span>
						<p>Tour & Travel Umroh</p>
					</div><!-- single counetr -->
				</div>
				<div class="col-md-4 col-sm-6">
					<!-- single counetr -->
					<div class="single-counter text-center">
						<span class="counter">800</span>
						<p>Merchant Kerjasama</p>
					</div><!-- single counetr -->
				</div>
				<div class="col-md-4 col-sm-6">
					<!-- single counetr -->
					<div class="single-counter text-center">
						<span class="counter">45</span>
						<p>Cabang</p>
					</div><!-- single counetr -->
				</div>
				<!-- <div class="col-md-3 col-sm-6">
					<div class="single-counter text-center">
						<span class="counter">3600</span>
						<p>Kontrak Aktif</p>
				</div> -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.End of Counter up area -->

	<!-- our partner -->
	<section class=" pb-60" id="mitra">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- partner carosel inner -->
					<div class="partner-carousel-wrap">
						<div class="partner-carousel owl-carousel">
							<!-- single partner -->
							<div class="single-partner">
								<img src="assets/img/Khalifah.png" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="assets/img/aliyah.png" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="assets/img/awmtour.png" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="assets/img/buana.png" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="assets/img/penjuruwisata.png" alt="">
							</div>
							<!-- End of single partner -->
						</div>
					</div>
					<!--End of  partner carosel inner -->
				</div>
			</div>
		</div>
	</section>
	<!-- End of our partner -->

	<!-- interact user -->
	<section class="bg-2 pt-120 pb-120" style="background-color: #E6F3FF">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-sm-7">
					<!-- user interact image -->
					<!-- <img src="assets/img/feature/user-interact.png" alt=""> -->
					<div class="app-scrin-inner mt-2">
						<div class="app-carousel owl-carousel">
							<img src="assets/img/feature/user-interact.png" data-rjs="2" alt="">
							<img src="assets/img/feature/user-interact.png" data-rjs="2" alt="">
						</div>
					</div>
					<!-- End of user interact image -->
				</div>
				<div class="col-lg-5 col-sm-5">
					<!-- user ineract text -->
					<div class="user-interact-inner">
						<div class="interact-icon">
							<img src="assets/img/icons/teamwork.svg" class="svg" alt="">
						</div>
						<h2>Marketing Yang Siap Membantu</h2>
						<p>
							Hubungi marketing kami di cabang terdekat jika membutuhkan bantuan atau informasi mengenai
							produk dan hal lainnya.
						</p>
						<a href="#" class="btn">Isi Formulir</a>
					</div>
					<!--End of user ineract text -->
				</div>
			</div>
		</div>
	</section>
	<!-- interact user -->

	<!-- download app -->
	<section class="pt-60 pb-120">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="download-app-inner text-center">
						<h2 class="h1">
							Bergabung Sekarang Dan Kembangkan Usaha Anda Bersama BFI Syariah
						</h2>
						<h3>Rumah Pembiayaan Syariah Tanpa Denda dan Penalti</h3>
						<a href="#" class="btn">Isi Formulir</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of download app -->

	<footer id="kontak">
		<footer class="footer">
			<div class="footerbg">
				<img src="assets/img/footer-bg.png" alt="">
			</div>
			<div class="footer-top pt-120 pb-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<!-- footer widget -->
							<div class="footer-widget">
								<div class="footer-logo">
									<a href="index.html"><img class="folo" src="assets/img/bfi.png"
											alt="BFI Syariah"></a>
								</div>
								<p>Unit Usaha Syariah BFI FInance Didukung dan diawasi oleh OJK.</p>
								<!-- footer social area -->
								<div class="footer-social-area">
									<ul class="social-icons social-icons-light nav">
										<li><a href="https://www.instagram.com/bfisyariah/" target="_blank"><i
													class="fa fa-instagram"></i></a></li>
										<li><a href="https://www.facebook.com/syariahbfi" target="_blank"><i
													class="fa fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/BfiSyariah" target="_blank"><i
													class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCD2wgarU-s9C6u_Xr-gk3hA/featured"
												target="_blank"><i class="fa fa-youtube-play"></i></a></li>
									</ul>
								</div>
								<!-- End of footer social area -->
							</div>
							<!--End of footer widget -->
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="footer-widget">
								<!-- widget header -->
								<div class="widget-header">
									<h5>Kontak Kami</h5>
								</div>
								<!-- widget header -->
								<div class="widget-body">
									<ul class="address-list">
										<li>
											<span><i class="fa  fa-whatsapp"></i></span>
											0811 977 500
										</li>
										<li>
											<span><i class="fa  fa-mail-forward"></i></span>
											cs.bfisyariah@bfi.co.id
										</li>
										<li>
											<span><i class="fa  fa-map"></i></span>
											BFI Tower, Sunburst CBD Lot.1.2, Jl. Kapt. Soebijanto Djojohadikusumo, BSD
											City,
											Tangerang 15322
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="footer-widget">
								<!-- widget header -->
								<div class="widget-header">
									<h5>Extra Links</h5>
								</div>
								<!-- widget header -->
							</div>

							<div class="widget-body">
								<div class="extra-link">
									<div class="link-left">
										<ul>
											<li><a href="https://syariah.bfi.co.id/">Tentang Kami</a></li>
											<li><a href="https://syariah.bfi.co.id/">Produk</a></li>
											<li><a href="https://syariah.bfi.co.id/contact">Kontak</a></li>
											<li><a href="https://syariah.bfi.co.id/news">Berita</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-text text-center">
					<p>2020 BFI Syariah. Rumah Pembiayaan Syariah Terpercaya Di Indonesia</p>
					<!-- <p>2019 BFI Syariah. Crafted with by Layerdrops</p> -->
				</div>
			</div>
		</footer>
	</footer>

	<!-- back to top -->
	<div class="back-to-top">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	<!-- back to top -->
@endsection

@section('script')
	<script>
		$(document).ready(function () {
			$("form#PartnerSyariah").on("submit", function (e) {
				e.preventDefault()
				var form = $(this)
				$("#submit").html('Mengirim... ').css("pointer-events", "none");
				$.ajax({
					url: 'https://script.google.com/macros/s/AKfycbx_49E1Lii2A85puzqOZbScLjgzww86udxZ8pHcHnfCs5xDCAcd/exec',
					type: 'POST',
					data: form.serialize(),
					dataType: 'json',
					success: function (data) {
						window.location.href = 'sukses.html'
					},
					error: function () {
						alert('gagal')
					}
				})
				setTimeout(function () {
					window.location.href = 'sukses.html'

				}, 5000)
				// window.location.href = 'sukses.html'
				// return false;
			})
		})
</script>
@endsection

</html>
