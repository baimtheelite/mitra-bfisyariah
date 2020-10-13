@php
    $branches = [
        "Balikpapan Syariah",
        "Bandung Syariah",
        "Banjarmasin Syariah",
        "Batam Syariah",
        "Bekasi Syariah",
        "Bogor Syariah",
        "BSD Syariah",
        "BukitTinggi Syariah",
        "Cawang Syariah",
        "Cirebon Syariah",
        "Depok Syariah",
        "Gorontalo Syariah",
        "Gresik Syariah",
        "Jakarta Selatan Syariah",
        "Jakarta Utara Syariah",
        "Jambi Syariah",
        "Karawang Syariah",
        "Kediri Syariah",
        "Kendari Syariah",
        "Kudus Syariah",
        "Lampung Syariah",
        "Makassar Syariah",
        "Malang Syariah",
        "Mataram Syariah",
        "Medan Syariah",
        "Meruya Syariah",
        "Mojokerto Syariah",
        "Padang Syariah",
        "Palangkaraya Syariah",
        "Palembang Syariah",
        "Pekanbaru Syariah",
        "Pontianak Syariah",
        "Purwokerto Syariah",
        "Samarinda Syariah",
        "Semarang Syariah",
        "Sidoarjo Syariah",
        "Solo Syariah",
        "Sorong Syariah",
        "Sukabumi Syariah",
        "Sunter Syariah",
        "Surabaya Syariah",
        "Tangerang Syariah",
        "Tasikmalaya Syariah",
        "Ternate Syariah",
        "Yogyakarta Syariah"
    ];
@endphp

@extends('template')

@section('style')
<style>
     /* .card {
        display: inline-block
    }  */

     .center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center; 
    }

    .flex-container {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
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
    .form-konsumen {
        padding: 0;
        margin: 0;
        position: relative;
        bottom: 200px;
        z-index: 999;
    }
    .logo-container {
        padding: 0px 0px 128px 168px;
    }
    .form-konsumen, .form-konsumen .card-header  {
        border-top: none;
    }
    /* .form-row .col {
        padding: 16px
    } */

    .hero {
        /* background-image: url('{{ asset('img/autumn.jpg') }}');  */
        
        min-height: 500px;
        padding-top: 50px;
        padding-left: 20%;
        padding-right: 20%;
    }

    .secondary {
        background: #F1F3F2;
    }

    .form-row>.col, .form-row>[class*=col-] {
        padding: 12px;
    /* padding-right: 5px; */ 
     /* padding-left: 5px; */
}

</style>
@endsection

@section('title', 'Home BFI Syariah')

@section('content')

<x-layout.navbar />

{{-- Hero --}}
<section>
    <div class="jumbotron jumbotron-fluid text-center" style="background: rgba(0, 0, 0, 0.5);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-white">
                    <div class="hero">
                        <h1 class="display-4" style="word-wrap: break-word">#JauhLebihTenang</h1><br>
                        <p class="lead">Menggapai mimpi anda dengan pembiayaan tanpa denda dan tanpa provisi di BFI Finance Syariah. </p>
                        {{-- <p class="lead">
                            <button class="btn btn-primary">Lihat</button>
                        </p> --}}
                    </div>
                </div>
                {{-- <div class="offset-6">
                    
                </div> --}}
            </div>
        </div>
    </div>
</section>

{{-- form section --}}
<section>
    <div class="container">
        <div class="card shadow form-konsumen">
            <div class="card-header bg-primary p-1 m-0"></div>
            <div class="card-body">
                <div class="container">
                    <h2 class="text-center p-4">Isi formulir untuk pengajuan</h2>
                    <form id="form" action="" method="POST" autocomplete="off">
                        <div class="form-row">
                            <div class="col-lg-4 col-md-4">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label for="no_hp">Nomor Handphone</label>
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
                        <hr>
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
                                <label for="waktu_dihubungi">Dihubungi pada waktu</label>
                                {{-- <input type="text" class="form-control" name="waktu_dihubungi" id="waktu_dihubungi" required> --}}
                                <select class="form-control" name="waktu_dihubungi" id="waktu_dihubungi" required>
                                    <option selected disabled value="">- Pilih Waktu -</option>
                                    <option value="Pagi">Pagi</option>
                                    <option value="Siang">Siang</option>
                                    <option value="Sore">Sore</option>
                                </select>
                            </div>
    
                        </div>
                    
                        <div class="form-check mt-4">
                            <input type="checkbox" class="form-check-input" id="agreement" required onclick="checkedAgreement()">
                            <label class="form-check-label" for="agreement"><small class="text-muted">Saya menyetujui untuk mengirimkan data diatas dan bersedia untuk dihubungi oleh PT BFI Finance Indonesia serta
                                berlangganan email promosi.</small></label>
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
            <div class="col-lg-4 col-md-4">
                <x-card-feature image="img/bfi.png" title="Tanpa Denda" text="Keringanan untuk anda dengan tidak ada biaya keterlambatan pembayaran angsuran" />
            </div>
            <div class="col-lg-4 col-md-4">
                <x-card-feature image="img/bfi.png" title="Tanpa Provisi" text="Tidak dikenakan biaya provisi pada pembiayaan
                di BFI Finance Syariah" />
            </div>
            <div class="col-lg-4 col-md-4">                
                <x-card-feature image="img/bfi.png" title="Akad Syariah" text="Transaksi murni jual-beli bukan menerima
                dana tunai seperti konvensional" />
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
                    <p class="mb-0">Travel Partner Kami: </p>
                    <x-partner image="aliyah.png" />
                    <x-partner image="awmtour.png" />
                    <x-partner image="buana.png" />
                    <x-partner image="khalifah.png" />
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- Banner --}}
<section>
    <div class="jumbotron" style="height: 200px;background-image: url('{{ asset('img/autumn.jpg') }}')">
    </div>
</section>

{{-- Paket Trip --}}
<section class="pt-4 pb-4">
    <div class="container">
        <h2 class="text-center p-4">Paket Trip Pilihan</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 mr-0 card p-0">
                <img class="card-img-top p-0 m-0" src="{{ asset("img/autumn.jpg") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pattaya Island Tour</h5>
                        <p class="card-text">Wujudkan impian ke tanah suci bersama My Ihram. Kami bekerjasama dengan AliaGo Tour and Travel mengadakan perjalanan umroh selama 9 hari.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 pt-0 pl-2">
                <div class="flex-container">
                    <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                    <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                    <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                    <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                    <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
                    <x-paket-trip judul="Umroh Super Saver Double" harga="Rp 810,000 / Bulan" />
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
            //mengubah teks tombol kirim menjadi 'mengirim...'
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

            
            formRef.push(dataObject, function(error){
                if(error){
                    console.log(error);
                } else {
                    // Memunculkan alert success
                    swal("Good job!", "Data telah terkirim!", "success");
                    // Enable button kirim
                    kirimData.removeAttribute("disabled");
                    // mengubah kembali tulisan 'kirim data'
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
@endsection