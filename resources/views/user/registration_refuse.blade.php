@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pendaftaran Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Halaman tidak bisa diakses</h1>
        </div>
        <div class="alert alert-success">
            <p>Jika ingin mendaftar, silahkan register dan login terlebih dahulu</p>
        </div>
        <a href="{{ url('peta/login') }}" class="btn btn-primary">Ke Menu Login</a>
    </div>
@endsection