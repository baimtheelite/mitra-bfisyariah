<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin BFI Syariah - @yield('title')</title>

  {{-- Favicon --}}
<link rel="shortcut icon" href="{{ asset('img/bfi.png') }}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset("administrator/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("administrator/dist/css/adminlte.min.css") }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset("administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ asset("administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
  {{-- Owl Carousel --}}
  <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">

  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  {{-- Navbar --}}
  <x-admin.layout.navbar />
  
  {{-- Sidebar --}}
  <x-admin.layout.sidebar />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  {{-- Footer --}}
  <x-admin.layout.footer />
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset("administrator/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("administrator/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- AdminLTE -->
<script src="{{ asset("administrator/dist/js/adminlte.js") }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset("administrator/plugins/chart.js/Chart.min.js") }}"></script>
<script src="{{ asset("administrator/dist/js/demo.js") }}"></script>
<script src="{{ asset("administrator/dist/js/pages/dashboard3.js") }}"></script>
<!-- DataTables -->
<script src="{{ asset("administrator/plugins/datatables/jquery.dataTables.min.js") }} "></script>
<script src="{{ asset("administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }} "></script>
<script src="{{ asset("administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js") }} "></script>
<script src="{{ asset("administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }} "></script>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-storage.js"></script>

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

@yield('scripts')

</body>
</html>
