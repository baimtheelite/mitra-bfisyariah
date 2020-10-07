@extends('main')

@section('title', 'Daftar Merchant BFI Syariah')
	
@section('content')
	
	<x-preloader />

	<x-layout.header />

	<!-- home banner area -->
	<div class="banner-area-inner">
		<div class="banner-inner-area banner-area1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8 col-lg-6 col-xl-5">
						<!-- banner text -->
						<div class="banner-text-inner">
							{{-- <div class="banner-shape-wrap">
								<div class="banner-shape-inner">
									<img src="{{asset("img/banner/shaps1.png")}}" alt="" class='shape shape1 rotate3d'>
									<img src="{{asset("img/banner/shaps2.png")}}" alt="" class='shape shape2 rotate2d'>
									<img src="{{asset("img/banner/shaps3.png")}}" alt="" class='shape shape3 rotate-2d'>
									<img src="{{asset("img/banner/shaps4.png")}}" alt="" class='shape shape4 rotate3d'>
									<img src="{{asset("img/banner/shaps5.png")}}" alt="" class='shape shape5 rotate2d'>
									<img src="{{asset("img/banner/shaps6.png")}}" alt="" class='shape shape6 rotate-2d'>
									<img src="{{asset("img/banner/shaps7.png")}}" alt="" class='shape shape7 rotate3d'>
								</div>
							</div> --}}

							<h1>BFI Syariah mitra bisnis terpercaya anda</h1>
							<p>Daftarkan usaha Anda di BFI Syariah dan tingkatkan penjualan bersama BFI Syariah dengan
								cicilan murni syariah.</p>
						</div>
						<!-- banner text -->
					</div>
					<div class="col-lg-5 offset-lg-1 col-md-4 offse-xl-2">
						<!-- banner image-->
						<div class="card shadow p-3 mb-5 bg-white rounded"
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
							<div class="feature-icon"><img src="{{asset("img/icons/gift.png")}}" class="png" alt=""></div>
							<h5>Pembayaran Alternatif</h5>
							<p>Memberikan pilihan pembayaran alternatif untuk usaha Anda secara cicilan murni syariah
								kepada konsumen..</p>
						</div>
						<!-- End of single feature inner -->

						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="{{asset("img/icons/job-promotion.png")}}" class="png" alt="">
							</div>
							<h5>Jangkauan Luas</h5>
							<p>Terdapat 45 cabang yang siap membantu memasarkan produk Anda kepada calon konsumen
								terbaik kami</p>
						</div>
						<!-- End of single feature inner -->

						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="{{asset("img/icons/safe.png")}}" class="png" alt=""></div>
							<h5>Akad Murni Syariah</h5>
							<p>Akad jual-beli tanpa denda dan penalti bagi konsumen, dan pembayaran langsung ke
								Merchant/Partner</p>
						</div>
						<!-- End of single feature inner -->

						<!-- single feature inner -->
						<div class="single-feature-inner text-center">
							<div class="feature-icon"><img src="{{asset("img/icons/brochure.png")}}" class="png" alt=""></div>
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
								<img src="{{asset("img/Khalifah.png")}}" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="{{asset("img/aliyah.png")}}" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="{{asset("img/awmtour.png")}}" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="{{asset("img/buana.png")}}" alt="">
							</div>
							<!-- End of single partner -->

							<!-- single partner -->
							<div class="single-partner">
								<img src="{{asset("img/penjuruwisata.png")}}" alt="">
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
							<img src="{{asset("img/feature/user-interact.png")}}" data-rjs="2" alt="">
							<img src="{{asset("img/feature/user-interact.png")}}" data-rjs="2" alt="">
						</div>
					</div>
					<!-- End of user interact image -->
				</div>
				<div class="col-lg-5 col-sm-5">
					<!-- user ineract text -->
					<div class="user-interact-inner">
						<div class="interact-icon">
							<img src="{{asset("img/icons/teamwork.svg")}}" class="svg" alt="">
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

	<!-- isi formulir -->
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
	<!-- End of isi formulir -->

	{{-- Paket --}}
	<section class="pt-60 pb-120">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-3">
					<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
						<div class="card-body">
						  <h5 class="card-title">Pattaya Island Tour</h5>
						  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  <a href="#" class="btn btn-primary">Lihat Paket</a>
						</div>
					  </div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="row">

					</div>
					<div class="row">

					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- End of paket --}}
	<!-- back to top -->
	<div class="back-to-top">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	<!-- back to top -->
	
	{{-- Footer --}}
	<x-layout.footer />
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

	{{-- Include owl carousel --}}
	<script src="owlcarousel/owl.carousel.min.js"></script>

	<script>
		//Owl Carousel
		// $(document).ready(function(){
		// 	$(".owl-carousel").owlCarousel({
		// 		// loop:true,
		// 		margin:10,
		// 		autoWidth:true,
		// 		autoHeight:true,
		// 		nav:true,
		// 		responsive:{
		// 			0:{
		// 				items:1
		// 			},
		// 			600:{
		// 				items:1
		// 			},
		// 			1000:{
		// 				items:1
		// 			}
		// 		}
		// 	});
		// })
	</script>
@endsection
