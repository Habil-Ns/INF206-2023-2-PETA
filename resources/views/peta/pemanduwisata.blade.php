@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection

@section('content')
    <div class="container">
        <div class="title">
            <h1>Daftar Pemandu Wisata</h1>
        </div>
        <div class="daftar-pemandu">
            <div class="left-content">
                <p>Nama: Unknown</p>
                <p>Penilaian: ******</p>
            </div>
            <div class="right-content">
                <div class="button-detail">
                    <button class="btn-detail">
                        <a href="#detailpemandu" class="detail-pemandu">Detail</a>
                    </button>
                </div>
                <div class="profile-pemandu">
                    <img src="{{ asset('images/profile_pemandu.jpg') }}" alt="Profile Pemandu" width=100px height=110px>
                </div>
            </div>
        </div>
    </div>
@endsection