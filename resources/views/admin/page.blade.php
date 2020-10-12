@extends('admin.template')

@section('title', 'Pages')

@section('style')
    <style>
        img {
            width: auto;
            height: 100px;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
{{-- Content Header --}}
<x-admin.content-header title="Page">
    <x-admin.breadcrumb-item url="/admin-wp" item="Dashboard" />
    <x-admin.breadcrumb-item url="/admin-wp/page" item="Page" />
  </x-admin.content-header>

<div class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Page Settings</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-lg-12">
                <h4>Logo</h4>
                <div id="list-logo">
                    {{--  --}}
                </div>
            </div>
          </div>
          </div>
          <div class="card-footer">
          </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    <script>
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


