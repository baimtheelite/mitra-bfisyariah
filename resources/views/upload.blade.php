@extends('main')

@section('title', 'Daftar Merchant BFI Syariah')

@section('content')
    {{-- Preloader --}}
    <x-preloader />

    {{-- Header --}}
	<x-layout.header />
    
        <div class="card">
            <div class="card-body">
                <progress value="0" max="100" id="uploader">0%</progress>
                <input type="file" value="upload" id="fileButton" />
            </div>
        </div>

	{{-- Footer --}}
	<x-layout.footer />
@endsection

@section('script')
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

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
    // Get Elements
    var uploader = document.getElementById('uploader');
    var fileButton = document.getElementById('fileButton');

    // Listen for file selecction
    fileButton.addEventListener('change', function(e){
        // Get File
        var file = e.target.files[0];

        // Create a storage ref
        var storageRef = firebase.storage().ref('mitra/' + file.name);

        //Upload file
        var task = storageRef.put(file);

        // Update progress bar
        task.on('state_changed', 
            function progress(snapshot) {
                var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                uploader.value = percentage;
            },
            function error(err) {

            },
            function complete() {

            }

        )

    })
</script>
@endsection