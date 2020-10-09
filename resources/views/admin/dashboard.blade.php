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
  
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Data Form</h3>
            </div>
            <div class="card-body table-responsive p-0">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>Alamat Email</th>
                  <th>Nomor Handphone</th>
                  <th>Cabang Terdekat</th>
                  <th>Tipe Mobil yang dijaminkan</th>
                  <th>Tujuan Pembiayaan</th>
                </tr>
                </thead>
                <tbody id="list-data">

                </tbody>
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
  //get element
  var listData = document.getElementById("list-data");
  var content = '';
  var formRef = firebase.database().ref('landingpage/');
  formRef.on('value', function(snapshot) {
    // updateStarCount(postElement, snapshot.val());
    snapshot.forEach((child) => {
      console.log(child.val());
      content += `<tr>
          <td>${child.val().nama_lengkap}</td>
          <td>${child.val().email}</td>
          <td>${child.val().no_hp}</td>
          <td>${child.val().cabang_terdekat}</td>
          <td>${child.val().jaminan_mobil}</td>
          <td>${child.val().tujuan_pembiayaan}</td>
        </tr>`
    })
      listData.innerHTML = content;
  });
</script>  
@endsection 
