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
                <tr id="column-data">
                  {{--  --}}
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

    // var dataTable = $("#data-form").dataTable();
    //get element
    var listData = document.getElementById("list-data");
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
    console.log(distinctKeys);

    var column = '';
    distinctKeys.forEach((key) => {
      column += `<td>${key}</td>`;
    })
    $("#column-data").html(column);
    console.log(column);
  })

  
</script>  
@endsection 
