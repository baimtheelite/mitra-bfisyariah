@extends('main')

@section('title', 'Daftar Merchant BFI Syariah')

@section('content')

    {{-- Header --}}
	{{-- <x-layout.header /> --}}
    
    <progress value="0" max="100" id="uploader">0%</progress>
    <input type="file" value="upload" id="fileButton">

	{{-- Footer --}}
	<x-layout.footer />
@endsection

@section('script')

<script>
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
        storageRef.put(file);

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