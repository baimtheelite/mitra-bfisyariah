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
        
        .paket-cicilan-card {
            margin-top: .5rem;
        }
        
        @media only screen and (max-width: 600px) {

            #form-section {
                position: relative;
                bottom: 20px;
            }
        }


        .form-konsumen {
            padding: 0;
            margin: 0;
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
            height: auto;
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

        h2.heading-title {
            font-size: 16px;
            font-weight: bold
        }
    </style>
@endsection

@section('title', '#JauhLebihTenang Pembiayaan di BFI Finance Syariah')

@section('content')

<x-layout.navbar />

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
                                <input type="number" class="form-control" name="no_hp" id="no_hp" minlength="7" maxlength="14" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4">
                                <label for="nilai_pembiayaan">Nilai Pembiayaan</label>
                                <input type="number" class="form-control" name="nilai_pembiayaan" id="nilai_pembiayaan" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="tujuan_pembiayaan">Tujuan Pembiayaan</label>
                                <input type="text" class="form-control" name="tujuan_pembiayaan" id="tujuan_pembiayaan" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="cabang_terdekat">Cabang Terdekat</label>
                                <select class="form-control" name="cabang_terdekat" id="cabang_terdekat" required>
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
                            <div class="col-lg-4 col-md-4">
                                <label for="merk_mobil">Merk Mobil</label>
                                <input type="text" class="form-control" name="merk_mobil" id="merk_mobil" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="tipe_mobil">Tipe Mobil</label>
                                <input type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="tahun_mobil">Tahun Mobil</label>
                                <input type="text" class="form-control" name="tahun_mobil" id="tahun_mobil" required>
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
        <div class="title-feature text-center">
            <h1>Feature</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda cumque dolore dolores eaque nam vitae, fuga hic aut doloribus atque, voluptate repellat maxime nostrum molestias omnis optio, sit ullam repellendus. </p>
        </div>
        <div class="row">
            <div id="partner-carousel" class="owl-carousel owl-theme">
                <div class="item d-flex">
                    <x-card-feature 
                        icon="home"
                        title="Tanpa Denda" 
                        text="Tidak ada biaya keterlambatan pembayaran angsuran" />
                </div>
                <div class="item d-flex">
                    <x-card-feature 
                        icon="dollar-sign"
                        title="Tanpa Provisi" 
                        text="Tidak dikenakan biaya provisi pada pembiayaan di BFI Finance" />
                </div>
                <div class="item d-flex">
                    <x-card-feature 
                        icon="dollar-sign"
                        title="Akad" 
                        text="Transaksi murni jual-beli bukan menerima dana tunai" />
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
        <div class="title-paket-cicilan text-center p-4">
            <h1>Paket Cicilan Tanpa Denda</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate omnis, neque inventore quo perferendis officia nemo veniam labore a officiis, odio, quasi facere ipsa accusantium beatae quam commodi voluptatem voluptates.</p>
        </div>
        <div class="row paket-cicilan">
            {{--  --}}
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

{{-- Modal Pop-up --}}
<div id="pop-up" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title">Pop-up</h5>  --}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-0">
                <div id="pop-up-image">
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
</div>

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

    {{-- get banner --}}
    <script>
        //get element
        var carouselInner = document.querySelector(".carousel-inner");
        var carouselIndex = document.querySelector(".carousel-indicators");
        //untuk menampung list gambar
        var content = '';
        
        var carouselIndicators = '';
        var carouselCount = 0;
        var active = 1;

        firebase.database().ref('banner/').on('value', (snapshot) => {
            snapshot.forEach((child) => {
                firebase.storage().ref('bfisyariah/banner').child(child.val().gambar).getDownloadURL().then((url) => {
                    content += `
                        <div class="carousel-item ${active == 1 ? 'active' : '' }">
                            <a target="_blank" href="${child.val().link}">
                                <img class="d-block w-100 banner" alt="${child.val().alt}" src="${url}">
                            </a>
                        </div>
                    `;

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
                        <x-paket-trip 
                            judul="${child.val().title}"
                            keterangan="${child.val().keterangan}"
                            gambar="${url}"
                            whatsapp="${child.val().whatsapp}" />               
                    </div>
                    `;
                    document.querySelector(".paket-cicilan").innerHTML = paketCicilanContent;
                });

            })
        })
    </script>

    {{-- pop-up --}}
    <script>
        $(document).ready(function() {
            // get element tempat untuk menaruh gambar pop-up di modal
            var popUpImage = document.querySelector("#pop-up-image");
            var content = '';
            firebase.database().ref("pop-up").once("value", (snapshot) => {
                snapshot.forEach((child) => {
                    firebase.storage().ref('bfisyariah/pop-up').child(child.val().gambar).getDownloadURL().then((url) => {

                        //jika gambar pop-up, di ceklis
                        if (child.val().display == true) {
                            content = `
                                <img class="img-fluid w-100" src=${url} />
                            `;
                            popUpImage.innerHTML = content
                        }
                    })
                })
            })

            // jika tombol 'jangan lagi tampilkan' belum di-klik, maka tampilkan pop-up
            if(sessionStorage.getItem("hide-popup") == undefined) {
                setTimeout(() => {
                    $("#pop-up").modal();
                }, 3000);
            }


            $("#dont-show").click(function() {
                sessionStorage.setItem("hide-popup", "true");
            })
        })
    </script>
@endsection