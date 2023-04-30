@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Hubungi Kami Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Terima Kasih</h1>
        </div>
        <div class="alert alert-success">
            <p>Komentar yang anda berikan sangat penting bagi kami</p>
        </div>
        <a href="{{ url('peta') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
    </div>
@endsection