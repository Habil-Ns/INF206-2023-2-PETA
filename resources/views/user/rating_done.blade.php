@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pendaftaran Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Terima Kasih atas Penilaian Anda</h1>
        </div>
        <div class="alert alert-success">
            <p>Terima kasih telah memberikan penilaian anda. Masukan anda dapat membantu kami dapat menangani kekurangan</p>
        </div>
        <a href="{{ url('peta') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
    </div>
@endsection