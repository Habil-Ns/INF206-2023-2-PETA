@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pendaftaran Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Anda telah diterima sebagai Pemandu Wisata</h1>
        </div>
        <div class="alert alert-success">
            <p>Selamat untuk kedepannya dan sukses dalam menjalankan tugas dalam sebagai pemandu dan tunggu anda dipesan oleh wisatawan</p>
        </div>
        <a href="{{ url('dashboard') }}" class="btn btn-primary">Kembali ke Dashboard</a>
    </div>
@endsection