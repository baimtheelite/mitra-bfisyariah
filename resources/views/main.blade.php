<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129708943-6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-129708943-6');

	</script>
	<meta name="description" content="Daftarkan usaha Anda di BFI Syariah dan tingkatkan penjualan bersama BFI Syariah dengan
		cicilan murni syariah. Tanpa Denda, Penalti dan Provisi. Harga tidak berubah sesuai akad.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Document Title -->
	<title>Bisnis BFI Syariah - @yield('title')</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="bfi.png">

	<!-- CSS Files -->
	<!--==== Google Fonts ====-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

	<!--==== Bootstrap css file ====-->
	<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">

	<!--==== Font-Awesome css file ====-->
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">

	<!-- Owl Carusel css file -->
	<link rel="stylesheet" href="{{ asset("plugins/owl-carousel/owl.carousel.min.css") }}">

	<!-- ====video poppu css==== -->
	<link rel="stylesheet" href="{{ asset("plugins/Magnific-Popup/magnific-popup.css") }}">

	<!--==== Style css file ====-->
	<link rel="stylesheet" href="{{ asset("css/style.css") }}">

	<!--==== Responsive css file ====-->
	<link rel="stylesheet" href="{{ asset("css/responsive.css") }}">

	<!--==== Custom css file ====-->
	<link rel="stylesheet" href="{{ asset("css/custom.css") }}">

	<!--==== SweetAlert 2 ====-->
	<link rel="stylesheet" href="{{ asset("plugins/sweetalert2/sweetalert2.min.css") }}">
</head>

<body>

    @yield('content')
    
</body>
<!-- JS Files -->

<!-- ==== JQuery 3.3.1 js file==== -->
<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>

<!-- ==== Bootstrap js file==== -->
<script src=" {{ asset("js/bootstrap.bundle.min.js") }}"></script>

<!-- ==== JQuery Waypoint js file==== -->
<script src=" {{ asset("plugins/waypoints/jquery.waypoints.min.js") }}"></script>

<!-- ==== Parsley js file==== -->
<script src=" {{ asset("plugins/parsley/parsley.min.js") }}"></script>

<!-- ==== parallax js==== -->
<script src=" {{ asset("plugins/parallax/parallax.js") }}"></script>

<!-- ==== Owl Carousel js file==== -->
<script src=" {{ asset("plugins/owl-carousel/owl.carousel.min.js") }}"></script>

<!-- ==== Menu  js file==== -->
<script src=" {{ asset("js/menu.min.js") }}"></script>

<!-- ===video popup=== -->
<script src=" {{ asset("plugins/Magnific-Popup/jquery.magnific-popup.min.js") }}"></script>

<!-- ====Counter js file=== -->
<script src=" {{ asset("plugins/waypoints/jquery.counterup.min.js") }}"></script>

<!-- ====SweetAlert 2=== -->
<script src=" {{ asset("plugins/sweetalert2/sweetalert2.min.js") }}"></script>
<script src=" {{ asset("js/sweet-alert.init.js") }}"></script>

<!-- ==== Script js file==== -->
<script src=" {{ asset("js/scripts.js") }}"></script>

<!-- ==== Custom js file==== -->
<script src=" {{ asset("js/custom.js") }}"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDf_6SsWfw0UONm_We0MLtT2zrUIJ00_d0",
    authDomain: "partnership-49790.firebaseapp.com",
    databaseURL: "https://partnership-49790.firebaseio.com",
    projectId: "partnership-49790",
    storageBucket: "partnership-49790.appspot.com",
    messagingSenderId: "1035084996048",
    appId: "1:1035084996048:web:450cc2c3840d491e6badd5",
    measurementId: "G-PMBYRL42LT"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

@yield('script')

</html>
