@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pemesanan Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Terima kasih telah memesan</h1>
        </div>
        <div class="alert alert-success">
            <p>Selanjutnya akan dihubungi oleh pemandu wisata yang bersangkutan</p>
        </div>
        <a href="{{ url('peta') }}" class="btn btn-primary">Ke Beranda</a>
    </div>
@endsection