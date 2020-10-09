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

 <div class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Logo Merchant</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <form role="form">
              <div class="form-group">
                <label for="nama_merchant">Nama Merchant</label>
                <input type="email" class="form-control" id="nama_merchant" placeholder="Nama Merchant">
              </div>
              <div class="form-group">
                <label for="fileButton">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fileButton" accept="image/png">
                    <label class="custom-file-label" for="fileButton">Pilih logo</label>
                  </div>
                </div>
                {{-- <progress value="0" max="100" id="uploader">0%</progress> --}}
                <div class="progress mt-1">
                  <div
                    id="uploader"
                    class="progress-bar progress-bar-striped"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 0%"
                  >
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-lg-4 offset-2">
            <ul id="list-logo" class="list-group">
              {{--  --}}
            </ul>
          </div>
        </div>
        </div>
        <div class="card-footer">
          <button id="submit" type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')


<script>
  // Get Elements
  var uploader = document.getElementById('uploader');
  var submit = document.getElementById('submit');

  // Listen for file selecction
  var file;
  fileButton.addEventListener('change', function(e){
      // Get File
      file = e.target.files[0];
  })

  submit.addEventListener('click', function(){

    //mengubah warna loading bar menjadi biru
    uploader.style.backgroundColor = "#007bff";

    //buat tombol submit jadi tidak bisa di-klik 
    submit.setAttribute("disabled", "disabled");

    //mengubah teks tombol submit menjadi 'uploading...'
    submit.innerHTML = "Uploading...";

    // Create a storage ref
    var storageRef = firebase.storage().ref('mitra/' + file.name);

    //Upload file
    var task = storageRef.put(file);

    // Update progress bar
    task.on('state_changed', 
        function progress(snapshot) {
            var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            uploader.style.width = percentage + "%";
        },
        function error(err) {

        },
        function complete() {
          //mengubah warna loading bar menjadi hijau (success)
          uploader.style.backgroundColor = "#ffc107";

          //buat tombol submit bisa di-klik lagi
          submit.removeAttribute("disabled");

          //merubah kembali teks tombol submit menjadi 'Submit'
          submit.innerHTML = "Submit";
        }

    )
  })

  //get element
  var listLogo = document.getElementById("list-logo");
  //untuk menampung list gambar
  var content = '';

  // Get Files List
  var logoRef = firebase.storage().ref('mitra/');
  logoRef.listAll().then((res) => {
    res.items.forEach((itemRef) => {
      // console.log(itemRef.name);
      logoRef.child(itemRef.name).getDownloadURL().then((url) => {
      // `url` is the download URL for 'landingpage/Panduan-SKPI-di-webstudent.pdf'

      // Or inserted into an <img> element:
      // var img = document.getElementById('myimg');
      // img.src = url;

      content += `<img src="${url}">`;
      listLogo.innerHTML = content;
      console.log(url);
      }).catch((error) => {
        console.log(error);
      });
    })
  })

  
</script>

@endsection