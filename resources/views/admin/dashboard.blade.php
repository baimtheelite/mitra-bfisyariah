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
          <button class="btn btn-primary" onclick="addData()">click me mon ami</button>
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Data Form</h3>
            </div>
            <div class="card-body table-responsive p-0">
              <table id="data-form" class="table table-bordered table-striped">
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
                  {{--  --}}
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

  const addData = () => {
    var dataTable = $("#data-form").dataTable();
    //       child.val().no_hp,
    // content = [
    //       child.val().nama_lengkap,
    //       child.val().email,
    //       child.val().cabang_terdekat,
    //       child.val().jaminan_mobil,
    //       child.val().tujuan_pembiayaan
    //       ];
    dataTable.rows.add(["Rhoma Fucking Irama", "roma@gmail.com", "08961881922", "Camry", "Buat Kuliah"]).draw();
    console.log("clicked");
  }

    //get element
    var listData = document.getElementById("list-data");
    var content = [];
    var formRef = firebase.database().ref('form/');
    formRef.on('value', function(snapshot) {
      // updateStarCount(postElement, snapshot.val());
      snapshot.forEach((child) => {
        // content += `<tr>
        //     <td>${child.val().nama_lengkap}</td>
        //     <td>${child.val().email}</td>
        //     <td>${child.val().no_hp}</td>
        //     <td>${child.val().cabang_terdekat}</td>
        //     <td>${child.val().jaminan_mobil}</td>
        //     <td>${child.val().tujuan_pembiayaan}</td>
        //   </tr>`        
        // listData.innerHTML = content;
        // console.log(Object.keys(child.val()));
        Object.keys(child.val()).forEach((key) => {
          console.log(key);
        });
        
    });
  })

  
</script>  
@endsection 
