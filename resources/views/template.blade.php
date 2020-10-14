<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    {{-- Font Awesome --}}
    <link href="{{ asset("css/all.css")}}" rel="stylesheet"> <!--load all styles -->
    
    {{-- Google Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    
    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">

    <style>
        body {
            font-family: "Ubuntu"
        }
    </style>

    @yield('style')

    <title>@yield('title')</title>
</head>
<body>

    @yield('content')

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

{{-- Sweet Alert --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- Owl Carousel --}}
<script src="{{ asset("js/owl.carousel.min.js") }} "></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

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

</html>