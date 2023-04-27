@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pendaftaran Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Registrasi Pemandu Wisata Berhasil</h1>
        </div>
        <div class="alert alert-success">
            <p>Terima kasih telah mendaftar sebagai pemandu wisata. Pendaftaran Anda sedang diproses dan akan segera kami konfirmasi melalui email yang Anda daftarkan.</p>
        </div>
        <a href="{{ url('peta') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
    </div>
@endsection