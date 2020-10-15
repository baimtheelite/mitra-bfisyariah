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
    </style>
@endsection

@section('content')

<x-layout.navbar />

{{-- Hero --}}
<section>
    <div class="jumbotron jumbotron-fluid center" style="background: rgba(0, 0, 0, 5); min-height: 500px; background-color: rgba(0, 0, 0, 0.8) ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 center text-white">
                    <h1 class="display-4" style="word-wrap: break-word">#JauhLebihTenang</h1><br>
                    <p class="lead">Dengan pembiayaan tanpa denda dan tanpa provisi di BFI Finance Syariah menggunakan akad dan proses syariah yang transaparan.</p>
                    {{-- <p class="lead">
                        <button class="btn btn-primary">Lihat</button>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact FORM --}}
<section>
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
                        <input type="text" class="form-control" name="no_whatsapp" id="no_whatsapp" required>
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
        <h2 class="text-center p-4">Paket Cicilan Tanpa Denda</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 mr-0 card p-0">
                <img class="card-img-top p-0 m-0" src="{{ asset("img/autumn.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pattaya Island Tour</h5>
                        <p class="card-text">Wujudkan impian ke tanah suci bersama My Ihram. Kami bekerjasama dengan AliaGo Tour and Travel mengadakan perjalanan umroh selama 9 hari.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12" style="padding-left: 20px;">
                {{-- <div class="flex-container"> --}}
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6" style="padding-left: 0px; padding-right: 0px">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="padding-left: 0px; padding-right: 0px">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="padding-left: 0px; padding-right: 0px">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="padding-left: 0px; padding-right: 0px">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="padding-left: 0px; padding-right: 0px">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="padding-left: 0px; padding-right: 0px">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                    </div>
                    {{-- </div> --}}
            </div>
        </div>
    </div>
</section>

{{-- Footbar --}}
<x-layout.footbar />

@endsection

@section('scripts')
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
@endsection

