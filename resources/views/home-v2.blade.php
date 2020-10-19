@php
    $branches = [
        "Balikpapan",
        "Bandung",
        "Banjarmasin",
        "Batam",
        "Bekasi",
        "Bogor",
        "BSD",
        "BukitTinggi",
        "Cawang",
        "Cirebon",
        "Depok",
        "Gorontalo",
        "Gresik",
        "Jakarta Selatan",
        "Jakarta Utara",
        "Jambi",
        "Karawang",
        "Kediri",
        "Kendari",
        "Kudus",
        "Lampung",
        "Makassar",
        "Malang",
        "Mataram",
        "Medan",
        "Meruya",
        "Mojokerto",
        "Padang",
        "Palangkaraya",
        "Palembang",
        "Pekanbaru",
        "Pontianak",
        "Purwokerto",
        "Samarinda",
        "Semarang",
        "Sidoarjo",
        "Solo",
        "Sorong",
        "Sukabumi",
        "Sunter",
        "Surabaya",
        "Tangerang",
        "Tasikmalaya",
        "Ternate",
        "Yogyakarta"
    ];
@endphp

@extends('template')

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

        #form-section {
            position: relative;
            bottom: 50px;
        }
        
        @media only screen and (max-width: 600px) {
            .paket-trip-small {
                margin-left: .5rem;
                margin-right: .5rem;
            }
            
            .paket-trip-big {
                margin-left: 1.5rem;
                margin-right: 1.5rem;
                margin-bottom: .5rem; 
            }

            #form-section {
                position: relative;
                bottom: 20px;
            }
        }


        .form-konsumen {
            padding: 0;
            margin: 0;
            /* position: absolute; */
            width: 100%;
            z-index: 999;
            border: none;
        }

        .form-konsumen, .form-konsumen .card-header  {
            border-top: none;
        }

        .logo-container {
            padding: 0px 0px 128px 168px;
        }

        label{
            font-size: 12px;
        }

        option {
            font-size: 12px;
        }

        .secondary {
            background: #F1F3F2;
        }

        .form-row>.col, .form-row>[class*=col-] {
            padding: 12px;
        }

        .banner {   
            max-width: 960px;
            max-height: 500px;
            /* max-height: 400px */
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
            color: #CDD2D5;
        }
        .separator::before, .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid rgba(0,0,0,.1);
        }
        .separator::before {
            margin-right: .25em;
        
        }
        .separator::after {
            margin-left: .25em;
        }
    </style>
@endsection

@section('title', 'BFI Finance - #JauhLebihTenang')

@section('content')

<x-layout.navbar />

{{-- <section>
    asdladmlsakdmla
</section> --}}

{{-- Carousel --}}
<section>
    {{-- <div class="container"> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                {{--  --}}
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 banner" src="{{ asset("img/768.jpg") }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 banner" src="{{ asset("img/768.jpg") }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 banner" src="{{ asset("img/768.jpg") }}" alt="Third slide">
              </div>
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

{{-- form Section --}}
<section id="form-section" style="">
    <div class="container">
        <div class="card shadow form-konsumen">
            <div class="card-header bg-primary p-1 m-0"></div>
            <div class="card-body">
                <div class="container">
                    <h2 class="text-center p-2">Mulai Pengajuan</h2>
                    <form id="form" action="" method="POST" autocomplete="off">
                        <div class="form-row">
                            <div class="col-lg-6 col-md-6">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="no_hp">Nomor Whatsapp</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" minlength="7" maxlength="14" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4">
                                <label for="nilai_pembiayaan">Nilai Pembiayaan</label>
                                <input type="text" class="form-control" name="nilai_pembiayaan" id="nilai_pembiayaan" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="tujuan_pembiayaan">Tujuan Pembiayaan</label>
                                <input type="text" class="form-control" name="tujuan_pembiayaan" id="tujuan_pembiayaan" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="cabang_terdekat">Cabang Terdekat</label>
                                {{-- <input type="text" class="form-control" name="cabang_terdekat" id="cabang_terdekat" required> --}}
                                <select class="form-control" name="cabang_terdekat" id="cabang_terdekat">
                                    <option selected disabled value="">- Pilih Cabang -</option>
                                    @foreach ($branches as $branch)
                                    <option value="{{ $branch }}">{{ $branch }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <hr> --}}
                        <div class="separator">Jaminan</div>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-6">
                                <label for="merk_mobil">Merk Mobil</label>
                                <input type="text" class="form-control" name="merk_mobil" id="merk_mobil" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="tipe_mobil">Tipe Mobil</label>
                                <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" required>
                            </div>
                        </div>
                    
                        <div class="form-check mt-4">
                            <input type="checkbox" class="form-check-input" id="agreement" required onclick="checkedAgreement()">
                            <label class="form-check-label" for="agreement">Saya menyetujui untuk mengirimkan data diatas dan bersedia untuk dihubungi oleh PT BFI Finance Indonesia serta
                                berlangganan email promosi.</label>
                        </div>
                        <button id="kirimData" type="submit" class="btn btn-primary btn-lg btn-block mt-4" disabled>Kirim Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- feature section --}}
<section class="secondary" style="padding: 5%">
    <div class="container">
        <div class="row">
            <div id="partner-carousel" class="owl-carousel owl-theme">
                <div class="item d-flex">
                    <x-card-feature image="img/bfi.png" title="Tanpa Denda" text="Tidak ada biaya keterlambatan pembayaran angsuran" />
                </div>
                <div class="item d-flex">
                    <x-card-feature image="img/bfi.png" title="Tanpa Provisi" text="Tidak dikenakan biaya provisi pada pembiayaan
                    di BFI Finance" />
                </div>
                <div class="item d-flex">
                    <x-card-feature image="img/bfi.png" title="Akad" text="Transaksi murni jual-beli bukan menerima
                    dana tunai" />
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Merchant --}}
{{-- <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="logo-container">
                    <p class="mb-0">Merchant Pilihan Kami: </p>
                    <x-partner image.png" />
                    <x-partner image="awmtour.png" />
                    <x-partner image="buana.png" />
                    <x-partner image=".png" />
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- Banner --}}
{{-- <section>
    <div class="jumbotron" style="height: 200px;background-image: url('{{ asset('img/autumn.jpg') }}')">
    </div>
</section> --}}

{{-- Paket Cicilan --}}
<section class="pt-4 pb-4">
    <div class="container">
        <h2 class="text-center p-4">Paket Cicilan Tanpa Denda</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 p-0 paket-trip-big card shadow">
                <img class="card-img-top p-0 m-0" src="{{ asset("img/autumn.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pattaya Island Tour</h5>
                        <p class="card-text">Wujudkan impian  suci bersama My Ihram. Kami bekerjasama dengan AliaGo Tour and Travel mengadakan perjalanan umroh selama 9 hari.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12" style="padding-left: 20px;">
                {{-- <div class="flex-container"> --}}
                    <div class="row paket-trip-small">
                        <div class="col-lg-4 col-md-4 col-6 px-0">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 px-0">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 px-0">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 px-0">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 px-0">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 px-0">
                            <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                        </div>
                    </div>
                    {{-- </div> --}}
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
                    <a href="https://wa.me/6289655333987?text=Hi,%20saya%20ingin%20bekerjasama%20dengan%20BFI%2" class="btn btn-outline-success mr-4 mt-2 mb-3 d-inline-block" style="width: 150px">Whatsapp</a>
                    <button id="ajukan-button" class="btn btn-success mr-4 mb-2 d-inline-block" style="width: 150px">Ajukan</button>
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

    {{-- Form & Firebase Database --}}
    <script>
        var database = firebase.database();
        var formRef = database.ref('form');

        //get element
        var kirimData   = document.getElementById("kirimData");

        // event ketika form data konsumen di submit
        $("#form").on("submit", function(event){
            event.preventDefault();

            //membuat tombol kirim tidak bisa dipencet
            kirimData.setAttribute("disabled", "disabled");
            // teks tombol kirim menjadi 'mengirim...'
            kirimData.innerHTML = "Mengirim...";
            // kirimData.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            //                         <span class="sr-only">Loading...</span>`;

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
            
            formRef.push(dataObject, function(error){
                if(error){
                    console.log(error);
                } else {
                    // Memunculkan alert success
                    // swal("Good job!", "Da terkirim!", "success");

                    //redirect ke halaman success
                    window.location.href = "{{ url('/success') }}";
                    // Enable button kirim
                    kirimData.removeAttribute("disabled");
                    //  kembali tulisan 'kirim data'
                    kirimData.innerHTML = "Kirim Data";
                    // mengosongkan kembali form data
                    form.reset();
                }
            })
        })
        
        //method untuk menghidupkan/mematikan tombol submit
        const checkedAgreement = () => {
            var checkBox = document.getElementById("agreement");
            
            if(checkBox.checked)
                kirimData.removeAttribute("disabled")
            else
                kirimData.setAttribute("disabled", "disabled");
        }
    </script>

    {{-- Owl Carousel --}}
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel(
                {
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items:1,
                            margin: 15,
                            stagePadding: 30,
                            mouseDrag: true
                        },
                        600:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:3,
                            loop:false,
                            margin: 15,
                            stagePadding: 30,
                            mouseDrag: false
                        }
                    }
                }
            );
        })
    </script>

    {{-- Scroll to form --}}
    <script>
        $("#ajukan-button").click(function() {
            $('html, body').animate({
                scrollTop: $("#form-section").offset().top
            }, 2000);
        });
    </script>

    {{-- get content --}}
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
@endsection