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
            <p>Gambar Banner yang ter-upload, disarankan upload gambarnya yang ukurannya 1500 x 500</p>
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
            <p>Gambar Paket Cicilan yang ter-upload, disarankan upload gambarnya ukuran height-nya 200px</p>
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

    {{-- Pop-up --}}
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Pop-up</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <p>Pop-up yang akan tampil ketika halaman landing page dibuka</p>
            <div id="list-pop-up">
              {{--  --}}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12">
              <button type="button" class="btn btn-default mt-2" data-toggle="modal" data-target="#modal-pop-up">
              Upload Pop-up
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
            <label for="banner-link">Link</label>
            <input class="form-control" type="text" id="banner-link" value="#">
          </div>
          <div class="form-group">
            <label for="banner-alt">Alt Text</label>
            <input class="form-control" type="text" id="banner-alt">
          </div>
          <div class="form-group">
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
            <label for="logo-alt">Alt Text</label>
            <input class="form-control" type="text" id="logo-alt">
          </div>
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
            <label for="paket-cicilan-keterangan">Keterangan</label>
            <input class="form-control" type="text" id="paket-cicilan-keterangan">
          </div>
          <div class="form-group">
            <label for="paket-cicilan-alt">Alt Text</label>
            <input class="form-control" type="text" id="paket-cicilan-alt">
          </div>
          
          <div class="form-group">
            <label for="paket-cicilan-text-whatsapp">Text Whatsapp</label>
            <input class="form-control" type="text" id="paket-cicilan-text-whatsapp">
          </div>
          <div class="form-group">
            <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="filePaketCicilan">
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

  {{-- Modal Pop-up --}}
  <div class="modal fade" id="modal-pop-up">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <form role="form">
          <div class="modal-header">
          <h4 class="modal-title">Upload Pop-up</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="pop-up-alt">Alt Text</label>
            <input class="form-control" type="text" id="pop-up-alt">
          </div>
          <div class="form-group">
            <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="filePopUp">
            <label class="custom-file-label" for="filePopUp">Pilih Gambar Pop-up</label>
            </div>
            </div>
            <div class="progress mt-1">
              <div
              id="loadingPopUp"
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
        <button type="button" id="submitPopUp" class="btn btn-primary">Save changes</button>
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
  function uploadStorage (loadingBar, submitButton, file, ref, data = {})
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
      var storageRef = firebase.storage().ref('bfisyariah/' + ref + '/' + file.name);

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

            swal("Good job!", "Data terkirim!", "success").then((value) => {
              // swal(`The returned value is: ${value}`);
              location.reload();
            });;
            
            if (data != null) {
              for (var prop in data){
                eval("data." + prop + " = document.getElementById(data[prop]).value")
              }
              data.gambar = file.name;
              // console.log(data);
              firebase.database().ref(ref).push(data);
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

  function deleteStorage(folder, item, key=null)
  {
    // Create a reference to the file to delete
    var itemRef = firebase.storage().ref('bfisyariah/' + folder + '/' + item);
    console.log(item);
    console.log(key);
    itemRef.delete().then(function() {
      // File deleted successfully
      swal("Good job!", "Data terhapus!", "success").then((value) => {
          // swal(`The returned value is: ${value}`);
          location.reload();
      });
    }).catch(function(error) {
      console.log(error);
    });
  }


  // Upload Logo Merchant
  uploadStorage('loadingLogo', 'submitLogo', 'fileLogo', 'logo-merchant', {
    alt: "logo-alt"
  });

  //Upload Banner
  uploadStorage('loadingBanner', 'submitBanner', 'fileBanner', 'banner', {
    link: "banner-link",
    alt: "banner-alt"
    });
  
  // Upload Paket Cicilan
  uploadStorage('loadingPaketCicilan', 'submitPaketCicilan', 'filePaketCicilan', 'paket-cicilan', {
    title: "paket-cicilan-title", 
    keterangan: "paket-cicilan-keterangan", 
    alt: "paket-cicilan-alt",
    whatsapp: "paket-cicilan-text-whatsapp"
    });
    
  // Upload Pop Up
  uploadStorage('loadingPopUp', 'submitPopUp', 'filePopUp', 'pop-up', {
    alt: "pop-up-alt",
  });

  getStorage('banner', 'list-banner');

  getStorage('logo-merchant', 'list-logo');

  // getStorage('pop-up', 'list-pop-up');

  
</script>

{{-- Paket Cicilan --}}
<script>
  var content = '';
  firebase.database().ref('paket-cicilan/').once('value', (snapshot) => {

    snapshot.forEach((child) => {
      firebase.storage().ref('bfisyariah/paket-cicilan').child(child.val().gambar).getDownloadURL().then(function(url){

        content += 
        `<div class="card">
          <div class="card-header">
            <input name="paket-cicilan-highlight" data-key="${child.key}" onclick="setHighlight()" type="radio" ${child.val().highlight == true ? 'checked' : ''}>
            <label for="paket-cicilan-highlight">Highlight</label>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-danger float-right" onclick="deletePaketCicilan('${child.key}')">Delete</button>
            <p class="card-title">${child.val().title}</p>
            <p class="card-text">${child.val().keterangan}</p>
            <img src="${url}" style="height: auto; width: 150px">
          </div>
        </div>`;

        document.getElementById("list-paket-cicilan").innerHTML = content;
      });
    })
  })

  const deletePaketCicilan = (key) => {
    // Delete firebase realtime database
    firebase.database().ref('paket-cicilan/' + key).remove((error) => {
      if(error) {
        console.log(error);
      } else {
        swal("Good job!", "Data terhapus!", "success").then((value) => {
          location.reload();
        });
      }
    });
    // console.log(key);
    
  }

  const setHighlight = (key) => {
    var checkedHighlight = document.getElementsByName("paket-cicilan-highlight");

    for (var i = 0; i < checkedHighlight.length; i++) {
      if(checkedHighlight[i].checked) {
        firebase.database().ref('paket-cicilan/' + checkedHighlight[i].dataset.key).update({
          highlight : true
        })
        // console.log(`${checkedHighlight[i].dataset.key} : true`);
      } else {
        firebase.database().ref('paket-cicilan/' + checkedHighlight[i].dataset.key).update({
          highlight : false
        })
        // console.log(`${checkedHighlight[i].dataset.key} : false`);
      }
    }
  }
</script>

{{-- Pop-up --}}
<script>
  var contentPopUp = '';
  firebase.database().ref('pop-up/').once('value', (snapshot) => {

    snapshot.forEach((child) => {
      firebase.storage().ref('bfisyariah/pop-up').child(child.val().gambar).getDownloadURL().then(function(url){

        contentPopUp += 
        `<div class="card">
          <div class="card-header">
            <input name="pop-up-display" data-key="${child.key}" onclick="setPopUp()" type="radio" ${child.val().display == true ? 'checked' : ''}>
            <label for="pop-up-display">Display</label>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-danger float-right" onclick="deletePopUp('${child.key}')">Delete</button>
            <img src="${url}" style="height: auto; width: 150px">
          </div>
        </div>`;

        document.getElementById("list-pop-up").innerHTML = contentPopUp;
      });
    })
  })

  const deletePopUp = (key) => {
    // Delete firebase realtime database
    firebase.database().ref('pop-up/' + key).remove((error) => {
      if(error) {
        console.log(error);
      } else {
        swal("Good job!", "Data terhapus!", "success").then((value) => {
          location.reload();
        });
      }
    });
    // console.log(key);
    
  }

  const setPopUp = () => {
    var checkedDisplay = document.getElementsByName("pop-up-display");

    for (var i = 0; i < checkedDisplay.length; i++) {
      if(checkedDisplay[i].checked) {
        firebase.database().ref('pop-up/' + checkedDisplay[i].dataset.key).update({
          display : true
        })
      } else {
        firebase.database().ref('pop-up/' + checkedDisplay[i].dataset.key).update({
          display : false
        })
      }
    }
  }
</script>

{{-- Owl Carousel --}}
<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  })
</script>


@endsection