@extends('template')

@section('style')
    <style>
        .center {
            /* padding-top: 10%;
            padding-bottom: 10%; */
            padding-left: 5%;
            padding-right: 5%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; 
        }
    </style>
@endsection

@section('title', 'Success')

@section('content')

<x-layout.navbar />

<div class="center text-center">
    <i class="fas fa-check-circle fa-4x mb-4 text-success"></i>
    <h1 class="text-success">Terima kasih!</h1>
    <p>Tim BFI Syariah akan menghubungi Anda dalam waktu singkat.</p>
</div>

{{-- Footbar --}}
<x-layout.footbar />

@endsection

@section('scripts')
    
@endsection