@extends('admin.template')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard v3</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v3</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
  <div class="container-fluid">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Logo Merchant</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form">
        <div class="card-body">
          <div class="form-group">
            <label for="nama_merchant">Nama Merchant</label>
            <input type="email" class="form-control" id="nama_merchant" placeholder="Nama Merchant">
          </div>
          <div class="form-group">
            <label for="fileButton">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileButton">
                <label class="custom-file-label" for="fileButton">Pilih logo</label>
              </div>
            </div>
            <progress value="0" max="100" id="uploader">0%</progress>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button id="submit" type="button" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('scripts')
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
  var submit = document.getElementById('submit');

  // Listen for file selecction
  var file = '';
  fileButton.addEventListener('change', function(e){
      // Get File
      file = e.target.files[0];
  })

  submit.addEventListener('click', function(){
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
    // alert(file);
  })


</script>
@endsection