@extends('admin.template')

@section('title', 'Dashboard')

@section('content')

  {{-- Content Header --}}
  <x-admin.content-header title="Dashboard">
    <x-admin.breadcrumb-item url="/admin-wp" item="Dashboard" />
  </x-admin.content-header>
  
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          {{-- Data Form Konsumen --}}
          <div class="card">
            <div class="card-header">
              <div class="card-title">Data Form Konsumen</div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th>Nomor Whatsapp</th>
                    <th>Nilai Pembiayaan</th>
                    <th>Tujuan Pembiayaan</th>
                    <th>Cabang Terdekat</th>
                    <th>Merk Mobil</th>
                    <th>Tipe Mobil</th>
                  </tr>
                </thead>
                <tbody id="row-form-konsumen">

                </tbody>
              </table>
            </div>
          </div>

          {{-- Data Form Kontak --}}
          <div class="card">
            <div class="card-header">
              <div class="card-title">Data Form Kontak</div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th>No Whatsapp</th>
                    <th>Pesan</th>
                  </tr>
                </thead>
                <tbody id="row-kontak">

                </tbody>
              </table>
            </div>
          </div>

          {{-- Download Form To CSV --}}
          <div class="card">
            <div class="card-header">Download data form</div>
            <div class="card-body">
              <table class="table" border="0">
                <tr>
                  <td>Download Form Konsumen</td>
                  <td>
                    <a 
                    href="https://json-csv.com/conversion/download?id=6df0e4136be1439d978b8c6a3b687b7a&delimeter=0&filename=result&timeStamp=13790876&zipped=0"
                    class="btn btn-primary">
                    Download <i class="fa fa-download"></i>
                    </a>
                </td>
                </tr>
                <tr>
                  <td>Download Form Kontak</td>
                  <td>
                    <a 
                    href="https://json-csv.com/conversion/download?id=df3e4c220dd3417e89f27261d4735ffe&delimeter=0&filename=result&timeStamp=13791067&zipped=0"
                    class="btn btn-primary">
                    Download <i class="fa fa-download"></i>
                    </a>
                </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script>

    // var dataTable = $("#data-form").dataTable();
    //get element
    var listData = document.getElementById("rows-data");
    var content = [];
    var formRef = firebase.database().ref('form/');
    
    
    formRef.on('value', function(snapshot) {

    const distinct = (value, index, self) => {
      return self.indexOf(value) === index;
    }

    const arr = [];

    snapshot.forEach((child) => {
      const keys = Object.keys(child.val());
      keys.forEach((key) => {
        arr.push(key)
      });

    });

    const distinctKeys = arr.filter(distinct);

    var column = '';
    var rows = '';
    distinctKeys.forEach((key) => {
      column += `<td>${key}</td>`;
    })

    // $("#rows-data").html(rows);
    console.log(rows);
    $("#column-data").html(column);


  })

  
</script>

  {{-- Table Form Konsumen --}}
  <script>
    var rowsFormKonsumen = '';
    firebase.database().ref('/form').once('value', (snapshot) => {
      snapshot.forEach((child) => {
        rowsFormKonsumen += `
          <tr>
            <td>${child.val().nama_lengkap}</td>
            <td>${child.val().no_hp}</td>
            <td>${child.val().nilai_pembiayaan}</td>
            <td>${child.val().tujuan_pembiayaan}</td>
            <td>${child.val().cabang_terdekat}</td>
            <td>${child.val().merk_mobil}</td>
            <td>${child.val().tipe_mobil}</td>
          </tr>
        `;
      })
      document.querySelector("#row-form-konsumen").innerHTML = rowsFormKonsumen;
    })
  </script>

  {{-- Table Form Kontak --}}
  <script>
    var rowsFormKontak = '';
    firebase.database().ref('/contact_form').once('value', (snapshot) => {
      snapshot.forEach((child) => {
        rowsFormKontak += `
          <tr>
            <td>${child.val().nama_lengkap}</td>
            <td>${child.val().no_whatsapp}</td>
            <td>${child.val().pesan}</td>
          </tr>
        `;
      })
      document.querySelector("#row-kontak").innerHTML = rowsFormKontak;
    })
  </script>
@endsection 
