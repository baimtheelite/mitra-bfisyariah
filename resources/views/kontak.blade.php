@extends('template')

@section('title', 'Kontak BFI Syariah')

@section('style')
    <style>
        .center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; 
        }

        .overlay {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            opacity:1;
            color: white;
            padding: 10px;
        }

        .banner {   
            max-width: 1920px;
            max-height: 500px;
        }

        h2.heading-title {
            font-size: 16px;
            font-weight: bold
        }

        
    </style>
@endsection

@section('content')

<x-layout.navbar />

{{-- Hero --}}
{{-- <section>
    <div class="jumbotron jumbotron-fluid center" style="background: rgba(0, 0, 0, 5); min-height: 500px; background-color: rgba(0, 0, 0, 0.8) ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 center text-white">
                    <h1 class="mx-5" style="font-size: 3.5rem">#JauhLebihTenang</h1><br>
                    <p class="lead">Dengan pembiayaan tanpa denda dan tanpa provisi di BFI Finance Syariah menggunakan akad dan proses syariah yang transaparan.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- Carousel --}}
<section>
    {{-- <div class="container"> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                {{--  --}}
            </ol>
            <div class="carousel-inner">
                {{--  --}}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    {{-- </div> --}}
</section>

{{-- Contact FORM --}}
<section class="mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6 col-md-6">
                <h2 class="pt-2 pb-4">Hubungi Kami</h2>
                <ul class="list-group">
                    <x-contact-list icon="home" title="Alamat">
                        BFI Tower, Sunburst CBD Lot 1.2 <br>
                        Jalan Kapten Soebijanto Djojohadikusumo <br>
                        BSD City - Tangerang Selatan 15322
                    </x-contact-list>
                    <x-contact-list icon="phone" title="Telepon">
                        Telepon:(021) 2965 0300<br>
                        Whatsapp : 0811977500
                    </x-contact-list>
                    <x-contact-list icon="envelope" title="Alamat">
                        cs.bfisyariah@bfi.co.id
                    </x-contact-list>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6">
                <h2 class="pt-2 pb-4">Beritahu Kami Pesan Anda</h2>
                <form id="contact-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="no_whatsapp">Nomor Whatsapp</label>
                        <input type="number" class="form-control" name="no_whatsapp" id="no_whatsapp" onkeypress="return isNumberKey(event)" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="5" required></textarea>
                    </div>
                    <button id="kirimData" type="submit" class="btn btn btn-outline-primary mt-4" style="width: 110px">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Whatsapp Button --}}
<section style="background: #CDD2D5; padding: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="text-center">
                    <a href="https://wa.me/6289655333987?text=Hi,%20saya%20ingin%20bekerjasama%20dengan%20BFI%20Syariah" class="btn btn-outline-success mr-4 mb-2 d-inline-block" style="width: 150px">Whatsapp</a>
                    <a href="#" class="btn btn-success mr-4 mb-2 d-inline-block" style="width: 150px">Ajukan</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Paket Cicilan --}}
<section class="pt-4 pb-4">
    <div class="container">
        <div class="title-paket-cicilan">
            <h2 class="text-center p-4">Paket Cicilan Tanpa Denda</h2>
        </div>
        <div class="row paket-cicilan">
            <div class="col-lg-4 col-md-4 p-0 paket-cicilan-big card shadow">
                {{--  --}}
            </div>
            <div class="col-lg-8 col-md-8 col-12" style="padding-left: 20px;">
                <div class="row paket-cicilan-small">
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Footbar --}}
<x-layout.footbar />

@endsection

@section('scripts')
    {{-- input number only --}}
    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

    {{-- form kontak --}}
    <script>
        var database = firebase.database();
        var contactFormRef = database.ref('contact_form');

        //get element
        var kirimData   = document.getElementById("kirimData");
        $("#contact-form").on("submit", function(){
            event.preventDefault();
            
            kirimData.setAttribute("disabled", "disabled");
            kirimData.innerHTML = "Mengirim...";

            // variabel kosong untuk menampung input form
            var dataObject = {};
            // menangkap (get) attribute name dan value dari form input
            var data = $(this).serializeArray();
            // membuat pasangan key dan value ke dalam 1 object
            data.forEach((item, index) => {
                eval("dataObject." + item['name'] + " = item['value']");
            })

            //get timestamp UTC
            var d = new Date();
            var date = d.getUTCDate();
            var month = d.getUTCMonth();
            var year = d.getUTCFullYear();
            var hours = d.getUTCHours();
            var minutes = d.getUTCMinutes();
            var seconds = d.getUTCSeconds();

            var fulldate = `${date}-${month}-${year} ${hours}:${minutes}:${seconds}`;

            dataObject.tanggal_dikirim = fulldate;
            
            contactFormRef.push(dataObject, function(error){
                if(error){
                    console.log(error);
                } else {
                    // Memunculkan alert success
                    swal("Good job!", "Data telah terkirim!", "success");
                    // Enable button kirim
                    kirimData.removeAttribute("disabled");
                    // 
                    kirimData.innerHTML = "Kirim Data";

                    form.reset();
                }
            })
        })
    </script>

    {{-- get banner --}}
    <script>
        //get element
        var carouselInner = document.querySelector(".carousel-inner");
        var carouselIndex = document.querySelector(".carousel-indicators");
        //untuk menampung list gambar
        var content = '';
        
        var carouselIndicators = '';
        var carouselCount = 0;
        // Get Files List
        var ref = firebase.storage().ref('bfisyariah/banner/');
        var active = 1;
        ref.listAll().then((res) => {
            res.items.forEach((itemRef) => {
                    ref.child(itemRef.name).getDownloadURL().then((url) => {

                    content += `<div class="carousel-item ${active == 1 ? 'active' : '' }">
                    <img class="d-block w-100 banner" src="${url}" alt="Second slide">
                    </div>`;

                    carouselIndicators += `<li data-target="#carouselExampleIndicators" data-slide-to="${carouselCount}" class="${carouselCount == 0 ? 'active' : ''}"></li>`;
                    

                    carouselInner.innerHTML = content;
                    carouselIndex.innerHTML = carouselIndicators;

                    active++;
                    carouselCount++;
                }).catch((error) => {
                    console.log(error);
                });
            })
        })
    </script>

    {{-- paket cicilan --}}
    <script>
        var paketCicilanContent = '';
        firebase.database().ref('paket-cicilan/').once('value', (snapshot) => {
            snapshot.forEach((child) => {
                firebase.storage().ref('bfisyariah/paket-cicilan').child(child.val().gambar).getDownloadURL().then(function(url){
                    paketCicilanContent += `
                    <div class="col-lg-3 col-md-3 col-6 p-0">
                        <x-paket-trip judul="${child.val().title}" keterangan="${child.val().keterangan}" gambar="${url}" whatsapp="${child.val().whatsapp}" />               
                    </div>
                    `;
                    document.querySelector(".paket-cicilan").innerHTML = paketCicilanContent;
                });

            })
        })
    </script>
@endsection

