@extends('template')

@section('style')
<style>
    .card {
        display: inline-block
    }

    .center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* align-items: center; */
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
        position: relative;
    }
    @media only screen and (min-width: 992px){
        .form-konsumen {
            position: absolute;
            z-index: 999;
            top: -80px
        }
        .logo-container {
            padding: 0px 0px 128px 168px;
        }
    }

    /* .form-konsumen, .form-konsumen .card-header  {
        border-top: none;
    } */

</style>
@endsection

@section('title', 'Home BFI Syariah')

@section('content')

<x-layout.navbar />

{{-- Hero --}}
<section>
<div class="jumbotron jumbotron-fluid center" style="background-image: url('{{ asset('img/autumn.jpg') }}'); background: rgba(0, 0, 0, 0.5);min-height: 500px; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 center text-white">
                <h1 class="display-4" style="word-wrap: break-word">#JauhLebihTenang</h1><br>
                <p class="lead">Dengan pembiayaan tanpa denda dan tanpa provisi di BFI Finance Syariah menggunakan akad dan proses syariah yang transaparan.</p>
                {{-- <p class="lead">
                    <button class="btn btn-primary">Lihat</button>
                </p> --}}
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card shadow form-konsumen">
                    <div class="card-header bg-primary p-1 m-0"></div>
                    <div class="card-body">
                        <div class="container">
                            <h2 class="text-center" style="padding-left: 40px; padding-right: 40px; margin-bottom: 32px;">Isi formulir untuk pengajuan</h2>
                            <form id="form" action="" method="POST">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="no_hp">Nomor Handphone</label>
                                        <input type="no_hp" class="form-control" name="no_hp" id="no_hp" required>
                                    </div>
                                    <div class="col">
                                        <label for="cabang_terdekat">Cabang Terdekat</label>
                                        <input type="text" class="form-control" name="cabang_terdekat" id="cabang_terdekat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jaminan_mobil">Mobil yang dijaminkan</label>
                                    <input type="text" class="form-control" name="jaminan_mobil" id="jaminan_mobil" required>
                                </div>
                                <div class="form-group">
                                    <label for="tujuan_pembiayaan">Tujuan Pembiayaan</label>
                                    <input type="text" class="form-control" name="tujuan_pembiayaan" id="tujuan_pembiayaan" required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreement" required onclick="checkedAgreement()">
                                    <label class="form-check-label" for="agreement"><small class="text-muted">Saya menyetujui untuk dihubungi oleh BFI Finance melalui telepon dan berlangganan email produk</small></label>
                                </div>
                                <button id="kirimData" type="submit" class="btn btn-primary btn-lg btn-block mt-4" disabled>Kirim Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

{{-- Merchant --}}
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="logo-container">
                    <p class="mb-0">Travel Partner Kami: </p>
                    <div id="image-container">
                        {{-- <x-partner image="aliyah.png" />
                        <x-partner image="awmtour.png" />
                        <x-partner image="buana.png" />
                        <x-partner image="khalifah.png" /> --}}
                    </div>
                </div>
            </div>
            <div class="offset-6">

            </div>
        </div>
    </div>
</section>

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
    {{-- Simpan Form Data --}}
    <script>
        //get reference
        var database = firebase.database();
        var formRef = database.ref('form');

        //get timestamp UTC
        var d = new Date();
        var date = d.getUTCDate();
        var month = d.getUTCMonth();
        var year = d.getUTCFullYear();
        var hours = d.getUTCHours();
        var minutes = d.getUTCMinutes();
        var seconds = d.getUTCSeconds();

        var fulldate = `${date}-${month}-${year} ${hours}:${minutes}:${seconds}`;

        //get element
        var form                = document.getElementById("form");
        var nama_lengkap        = document.getElementById("nama_lengkap");
        var email               = document.getElementById("email");
        var no_hp               = document.getElementById("no_hp");
        var cabang_terdekat     = document.getElementById("cabang_terdekat");
        var jaminan_mobil       = document.getElementById("jaminan_mobil");
        var tujuan_pembiayaan   = document.getElementById("tujuan_pembiayaan");
        
        var kirimData   = document.getElementById("kirimData");

        const insertData = () => {
            formRef.push({
                nama_lengkap        : nama_lengkap.value,
                email               : email.value,
                no_hp               : no_hp.value,
                cabang_terdekat     : cabang_terdekat.value,
                jaminan_mobil       : jaminan_mobil.value,
                tujuan_pembiayaan   : tujuan_pembiayaan.value,
                created_at          : fulldate
            }, function(error){
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
        }

        form.addEventListener("submit", function(event){
            event.preventDefault();
            
            kirimData.setAttribute("disabled", "disabled");
            kirimData.innerHTML = "Mengirim...";
            
            insertData();
        })
        
        const checkedAgreement = () => {
            var checkBox = document.getElementById("agreement");
            
            if(checkBox.checked)
                kirimData.removeAttribute("disabled")
            else
                kirimData.setAttribute("disabled", "disabled");
        }
    </script>

    {{-- Get Logo Partner --}}
<script>
    //get element
    var listLogo = document.querySelector("#image-container");
    //untuk menampung list gambar
    var content = '';

    // Get Files List
    var logoRef = firebase.storage().ref('mitra/');
    logoRef.listAll().then((res) => {
        res.items.forEach((itemRef) => {
        // console.log(itemRef.name);
        logoRef.child(itemRef.name).getDownloadURL().then((url) => {

        content += `<x-partner image="${url}" />`;
        listLogo.innerHTML = content;
        console.log(url);
        }).catch((error) => {
            console.log(error);
        });
        })
    })
</script>
@endsection