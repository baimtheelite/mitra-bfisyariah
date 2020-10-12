@extends('template')

@section('title', 'Kontak BFI Syariah')


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

{{-- Contact --}}
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

{{-- Footbar --}}
<x-layout.footbar />

@endsection

@section('scripts')
    <script>
        var database = firebase.database();
        var contactFormRef = database.ref('contact_form');

        //get element
        var contactForm     = document.getElementById("contact-form");
        var nama_lengkap    = document.getElementById("nama_lengkap");
        var noWhatsapp      = document.getElementById("no_whatsapp");
        var pesan           = document.getElementById("pesan");
        
        var kirimData   = document.getElementById("kirimData");

        const insertData = () => {
            contactFormRef.push({
                nama_lengkap    : nama_lengkap.value,
                noWhatsapp      : noWhatsapp.value,
                pesan           : pesan.value,
               
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

        contactForm.addEventListener("submit", function(event){
            event.preventDefault();
            
            kirimData.setAttribute("disabled", "disabled");
            kirimData.innerHTML = "Mengirim...";
            
            insertData();
        })
    </script>
@endsection

