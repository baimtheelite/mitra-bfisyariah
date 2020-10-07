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
</style>
@endsection

@section('title', 'Home BFI Syariah')

@section('content')

<x-layout.navbar />

{{-- Hero --}}
<section>
<div class="jumbotron jumbotron-fluid center" style="background-image: url('{{ asset('img/autumn.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 center text-white">
                <h1 class="display-4">Pattaya Island</h1><br>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                <p class="lead">
                    <button class="btn btn-primary">Lihat</button>
                </p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header bg-primary p-1"></div>
                    <div class="card-body">
                        <h2>Daftar Disini Untuk Segera Berlibur!</h2>
                        <form class="form-konsumen" action="#" method="POST">
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
                                    <label for="pekerjaan">Alamat Pekerjaan</label>
                                    <input type="pekerjaan" class="form-control" name="pekerjaan" id="pekerjaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="provinsi" class="form-control" name="provinsi" id="provinsi">
                            </div>
                            <div class="form-group">
                                <label for="destinasi_travel">Destinasi Travel</label>
                                <input type="destinasi_travel" class="form-control" name="destinasi_travel" id="destinasi_travel">
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
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p class="mb-0">Travel Partner Kami: </p>
                <x-partner image="aliyah.png" />
                <x-partner image="awmtour.png" />
                <x-partner image="buana.png" />
                <x-partner image="khalifah.png" />
            </div>
        </div>
    </div>
</section>

{{-- Banner --}}
<section>
    <div class="jumbotron" style="height: 50vh;background-image: url('{{ asset('img/autumn.jpg') }}')">
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