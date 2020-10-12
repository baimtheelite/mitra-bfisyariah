@extends('admin.template')

@section('title', 'Content')


@section('style')
    <style>
      ul#list-logo {
        overflow-x: scroll
      }
      
      img {
        width: auto;
        height: 150px;
        object-fit: cover;
      }
    </style>
@endsection

@section('content')

{{-- Content Header --}}
<x-admin.content-header title="Dashboard">
  <x-admin.breadcrumb-item url="/admin-wp" item="Dashboard" />
  <x-admin.breadcrumb-item url="/admin-wp/content" item="Content" />
</x-admin.content-header>

 <div class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Logo Merchant</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <form role="form">
              <div class="form-group">
                <label for="fileButton">Upload Logo Merchant</label>
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

      content += `<div class="item">
        <img src="${url}">
      </div>`;
      listLogo.innerHTML = content;
      console.log(url);
      }).catch((error) => {
        console.log(error);
      });
    })
  })

  
</script>

{{-- Owl Carousel --}}
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
})
</script>

@endsection