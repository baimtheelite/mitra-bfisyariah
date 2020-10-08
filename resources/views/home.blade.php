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

</style>
@endsection

@section('title', 'Home BFI Syariah')

@section('content')

<x-layout.navbar />

{{-- Hero --}}
<section>
<div class="jumbotron jumbotron-fluid center" style="min-height: 500px; background-image: url('{{ asset('img/autumn.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 center text-white">
                <h1 class="display-4">#JauhLebihTenang</h1><br>
                <p class="lead">Dengan pembiayaan tanpa denda dan tanpa provisi di BFI Finance Syariah menggunakan akad dan proses syariah yang transaparan.</p>
                {{-- <p class="lead">
                    <button class="btn btn-primary">Lihat</button>
                </p> --}}
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card form-konsumen">
                    <div class="card-header bg-primary p-1 m-0"></div>
                    <div class="card-body">
                        <div class="container">
                            <h2 class="text-center">Isi formulir untuk pengajuan</h2>
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="no_hp">Nomor Handphone</label>
                                        <input type="no_hp" class="form-control" name="no_hp" id="no_hp">
                                    </div>
                                    <div class="col">
                                        <label for="cabang_terdekat">Cabang Terdekat</label>
                                        <input type="text" class="form-control" name="cabang_terdekat" id="cabang_terdekat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jaminan_mobil">Mobil yang dijaminkan</label>
                                    <input type="text" class="form-control" name="jaminan_mobil" id="jaminan_mobil">
                                </div>
                                <div class="form-group">
                                    <label for="tujuan_pembiayaan">Tujuan Pembiayaan</label>
                                    <input type="text" class="form-control" name="tujuan_pembiayaan" id="tujuan_pembiayaan">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreement">
                                    <label class="form-check-label" for="agreement"><small class="text-muted">Saya menyetujui untuk dihubungi oleh BFI Finance melalui telepon dna berlangganan email produk</small></label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Kirim Data</button>
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
                    <x-partner image="aliyah.png" />
                    <x-partner image="awmtour.png" />
                    <x-partner image="buana.png" />
                    <x-partner image="khalifah.png" />
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

<section class="pt-4 pb-4">
    <div class="container">
        <h2 class="text-center p-4">Paket Trip Pilihan</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 mr-0">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
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