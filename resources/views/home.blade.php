@extends('template')

@section('style')
<style>
    .card {
        display: inline-block
    }
</style>
@endsection

@section('title', 'Home BFI Syariah')

@section('content')

<x-layout.navbar />

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header bg-primary p-1"></div>
                    <div class="card-body">
                        <h2>Daftar Disini Untuk Segera Berlibur!</h2>
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
                            <button type="button" class="btn btn-primary btn-lg btn-block">Kirim Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Travel Partner Kami: </p>
            <img src="{{ asset("img/aliyah.png") }}" alt="aliyah">
            <img src="{{ asset("img/awmtour.png") }}" alt="awmtour">
            <img src="{{ asset("img/buana.png") }}" alt="buana">
            <img src="{{ asset("img/khalifah.png") }}" alt="khalifah">
        </div>
    </div>

    <section class="pt-4 pb-4">
        <h2 class="text-center p-4">Paket Trip Pilihan</h2>
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 offset-2">
                <div class="row">
                    <div class="card-deck">
                        <div class="card">
                          <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Umroh Super Saver Double</p>
                            <p class="card-text"><small class="text-muted">Rp 918,122 / Bulan</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Umroh Super Saver Double</p>
                            <p class="card-text"><small class="text-muted">Rp 918,122 / Bulan</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Umroh Super Saver Double</p>
                            <p class="card-text"><small class="text-muted">Rp 918,122 / Bulan</small></p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Umroh Super Saver Double</p>
                            <p class="card-text"><small class="text-muted">Rp 918,122 / Bulan</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Umroh Super Saver Double</p>
                            <p class="card-text"><small class="text-muted">Rp 918,122 / Bulan</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset("img/bfi.png") }}" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">Umroh Super Saver Double</p>
                            <p class="card-text"><small class="text-muted">Rp 918,122 / Bulan</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<footer class="p-4 bg-light">
    <div class="row">
        <div class="col-lg-3">
            <h3>Kontak Kami</h3>
            <ul>
                <li>+62 888 888</li>
                <li>bfisyariah@bfi.com</li>
                <li>Find a store</li>
            </ul>
        </div>
        <div class="col-lg-3">
            <h3>Kontak Kami</h3>
            <ul>
                <li>+62 888 888</li>
                <li>bfisyariah@bfi.com</li>
                <li>Find a store</li>
            </ul>
            
        </div>
        <div class="col-lg-3">
            <h3>Kontak Kami</h3>
            <ul>
                <li>+62 888 888</li>
                <li>bfisyariah@bfi.com</li>
                <li>Find a store</li>
            </ul>

        </div>
        <div class="col-lg-3">

        </div>
    </div>
</footer>
@endsection