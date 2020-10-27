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

  <script>
    firebase.database().ref('/contact_form').on('value', (snapshot) => {
      snapshot.forEach((child) => {
        console.log(child.val());
      })
    }, (error) => {
      if(error) {
        console.log(error);
      } else {
        console.log('succcesssdfs');
      }
    })
  </script>
@endsection 
