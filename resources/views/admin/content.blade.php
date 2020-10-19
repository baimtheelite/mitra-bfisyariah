@extends('admin.template')

@section('title', 'Content')


@section('style')
    <style>
      ul#list-logo {
        overflow-x: scroll
      }
      
       .image-content {
        opacity: 1;
        width: auto;
        height: 150px;
      }

      .image-container:hover .image {
        opacity: 0.3;
      }

      .image-container:hover .overlay-content {
        opacity: 1;
      }

      .delete-content {
        position: absolute;
        left: 35%;
        top: 35%;

      }
    </style>
@endsection

@section('content')

{{-- Content Header --}}
<x-admin.content-header title="Content">
  <x-admin.breadcrumb-item url="/admin-wp" item="Dashboard" />
  <x-admin.breadcrumb-item url="/admin-wp/content" item="Content" />
</x-admin.content-header>

<div class="content">
  <div class="container-fluid">
    
    {{-- Banner --}}
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Banner</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <p>Gambar Banner yang ter-upload, disarankan upload gambarnya yang lebarnya 500px, panjang menyesuaikan aspect ratio, halah apaan sih</p>
            <div id="list-banner">
              {{--  --}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <button type="button" class="btn btn-default mt-2" data-toggle="modal" data-target="#modal-banner">
              Upload Banner
            </button>
          </div>
        </div>
        </div>
    </div>

    {{-- Logo Merchant --}}
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Logo Merchant</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <p>Gambar Logo Merchant yang ter-upload, disarankan upload gambarnya yang tipe .png</p>
            <div id="list-logo">
              {{--  --}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12">
              <button type="button" class="btn btn-default mt-2" data-toggle="modal" data-target="#modal-logo">
              Upload Logo Merchant
            </button>
          </div>
        </div>
      </div>
    </div>

    {{-- Paket Cicilan --}}
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Paket Cicilan</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <p>Gambar Paket Cicilan yang ter-upload, disarankan upload gambarnya yang tipe .png</p>
            <div id="list-paket-cicilan">
              {{--  --}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12">
              <button type="button" class="btn btn-default mt-2" data-toggle="modal" data-target="#modal-paket-cicilan">
              Upload Paket Cicilan
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  {{-- Modal Banner --}}
  <div class="modal fade" id="modal-banner">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <form role="form">
          <div class="modal-header">
          <h4 class="modal-title">Upload Banner</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <div class="modal-body">
          <div class="form-group">
          {{-- <label for="uploadBanner">Upload Logo Banner</label> --}}
            <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="fileBanner" accept="image/jpg">
            <label class="custom-file-label" for="fileBanner">Pilih banner</label>
            </div>
            </div>
            <div class="progress mt-1">
              <div
              id="loadingBanner"
              class="progress-bar progress-bar-striped"
              role="progressbar"
              aria-valuemin="0"
              aria-valuemax="100"
              style="width: 0%"
              >
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" id="submitBanner" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
  {{-- Modal Logo Merchant --}}
  <div class="modal fade" id="modal-logo">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <form role="form">
          <div class="modal-header">
          <h4 class="modal-title">Upload Logo Merchant</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="fileLogo" accept="image/png">
            <label class="custom-file-label" for="fileLogo">Pilih Logo Merchant</label>
            </div>
            </div>
            <div class="progress mt-1">
              <div
              id="loadingLogo"
              class="progress-bar progress-bar-striped"
              role="progressbar"
              aria-valuemin="0"
              aria-valuemax="100"
              style="width: 0%"
              >
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" id="submitLogo" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Paket Cicilan --}}
  <div class="modal fade" id="modal-paket-cicilan">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <form role="form">
          <div class="modal-header">
          <h4 class="modal-title">Upload Paket Cicilan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="paket-cicilan-title">Judul</label>
            <input class="form-control" type="text" id="paket-cicilan-title">
          </div>
          <div class="form-group">
            <label for="paket-cicilan-subtitle">Sub-Judul</label>
            <input class="form-control" type="text" id="paket-cicilan-subtitle">
          </div>
          <div class="form-group">
            <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="filePaketCicilan" accept="image/png">
            <label class="custom-file-label" for="filePaketCicilan">Pilih Paket Cicilan</label>
            </div>
            </div>
            <div class="progress mt-1">
              <div
              id="loadingPaketCicilan"
              class="progress-bar progress-bar-striped"
              role="progressbar"
              aria-valuemin="0"
              aria-valuemax="100"
              style="width: 0%"
              >
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
        <button type="button" id="submitPaketCicilan" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

<script>
  /*
    @desc function untuk upload data ke firebase storage
    @param loadingBar get element loading bar
    @param submitButton get element tombol submit
    @param file get element file upload
    @param filePath set file path reference
  */
  function uploadStorage (loadingBar, submitButton, file, filePath, title = null, subtitle = null)
  {
    // Get Elements
    var loading = document.getElementById(loadingBar);
    var submit = document.getElementById(submitButton);
    var fileButton = document.getElementById(file);

    // Listen for file selecction
    var file;
    fileButton.addEventListener('change', function(e){
        // Get File
        file = e.target.files[0];
    })

    submit.addEventListener('click', function(){

      //mengubah warna loading bar menjadi biru
      loading.style.backgroundColor = "#007bff";

      //buat tombol submit jadi tidak bisa di-klik 
      submit.setAttribute("disabled", "disabled");

      //mengubah teks tombol submit menjadi 'uploading...'
      submit.innerHTML = "Uploading...";

      // Create a storage ref
      var storageRef = firebase.storage().ref('bfisyariah/' + filePath + '/' + file.name);

      //Upload file
      var task = storageRef.put(file);

      // Update progress bar
      task.on('state_changed', 
          function progress(snapshot) {
              var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              loading.style.width = percentage + "%";
          },
          function error(err) {

          },
          function complete() {
            //mengubah warna loading bar menjadi hijau (success)
            loading.style.backgroundColor = "#ffc107";

            //buat tombol submit bisa di-klik lagi
            submit.removeAttribute("disabled");

            //merubah kembali teks tombol submit menjadi 'Submit'
            submit.innerHTML = "Submit";

            swal("Good job!", "Da terkirim!", "success");
            
            if (title != null && subtitle != null) {
              var textTitle = document.getElementById(title);
              var textSubtitle = document.getElementById(subtitle);

              firebase.database().ref('paket-trip/').push({
                title: title,
                subtitle: subtitle,
                gambar: file.name
              });

            }
          }

      )
    })
  }

  /*
    @desc function untuk mendapatkan list file dari firebase storage
    @param folder pilih folder ref
    @param storageContainer div untuk menampung file
  */
  function getStorage(folder, storageContainer) 
  {
    //get element
    var listStorage = document.getElementById(storageContainer);
    //untuk menampung list gambar
    var content = '';
    // Get Files List
    var ref = firebase.storage().ref('bfisyariah/' + folder);
    ref.listAll().then((res) => {
      res.items.forEach((itemRef) => {
        ref.child(itemRef.name).getDownloadURL().then((url) => {

        content += `
        <div class="card d-inline">
          <img class="image-content mr-2" src="${url}">
          <div class="card-img-overlay">
            <a class="btn btn-danger text-white delete-content" type="button" onclick="deleteStorage('${folder}', '${itemRef.name}')">Delete</a>
          </div>
        </div>
        `;

        listStorage.innerHTML = content;
        // console.log(url);
        // console.log(itemRef.name);
        }).catch((error) => {
          console.log(error);
        });
      })
    })
  }

  function deleteStorage(folder, item)
  {
    // Create a reference to the file to delete
    var itemRef = firebase.storage().ref('bfisyariah/' + folder + '/' + item);
    console.log(item);
    // Delete the file
    itemRef.delete().then(function() {
      // File deleted successfully
      swal("Good job!", "Data terhapus!", "success");
    }).catch(function(error) {
      console.log(error);
    });
  }


  // Upload Logo Merchant
  uploadStorage('loadingLogo', 'submitLogo', 'fileLogo', 'logo-merchant');
  //Upload Banner
  uploadStorage('loadingBanner', 'submitBanner', 'fileBanner', 'banner');
  //Upload Paket Cicilan
  uploadStorage('loadingPaketCicilan', 'submitPaketCicilan', 'filePaketCicilan', 'paket-cicilan', 'paket-cicilan-title', 'paket-cicilan-subtitle');

  getStorage('banner', 'list-banner');

  getStorage('logo-merchant', 'list-logo');

  getStorage('paket-cicilan', 'list-paket-cicilan');

  
</script>

{{-- Owl Carousel --}}
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
})
</script>

@endsection