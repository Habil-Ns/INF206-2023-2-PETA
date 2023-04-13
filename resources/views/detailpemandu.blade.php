@extends('layout.navigation')



@section('content')
    <div class="container">
        <div class="title">
            <h1>Daftar Pemandu Wisata</h1>
        </div>
        <div class="daftar-pemandu">
            <div class="left-content">
                <p>Nama: pemandu wisata 1<br></p>
                <p>Penilaian: *****</p>
                <div class="rating"></div>

            </div>
            
            <div class="right-content">
                <div class="button-detail">
                    <button class="btn-detail">
                        <a href="#detailpemandu" class="detail-pemandu">Detail</a>
                    </button>
                </div>
                <div class="profile-pemandu">
                    <img src="{{ asset('image/profile_pemandu.jpg') }}" alt="Profile Pemandu" width=100px height=110px>
                </div>
            </div>
        </div>
    </div>
@endsection