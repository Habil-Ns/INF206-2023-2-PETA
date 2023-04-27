@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5" id="daftar_pemandu">
        <div class="title">
            <h1>Daftar Pemandu Wisata</h1>
        </div>
        @foreach ($registrations as $registration)
            @if ($registration->status != 'Pending' )
                <div class="daftar-pemandu mt-4">
                    <div class="left-content">
                        <p>Nama: {{$registration->nama}}</p>
                        <p>Penilaian: ******</p>
                    </div>
                    <div class="right-content">
                        <div class="button-detail">
                            <button class="btn-detail">
                                <a href="{{url ("peta/pemanduwisata/$registration->nama")}}" class="detail-pemandu">Detail</a>
                            </button>
                        </div>
                        <div class="profile-pemandu">
                            @if($registration->gambar)
                                <img src="{{ asset('gambar/'. $registration->gambar) }}" alt="Profile Pemandu Wisata" width="160px" height="160px">
                            @else
                                <img src="{{ asset('images/profile_pemandu.jpg') }}" alt="Profile Pemandu Wisata" width="160px" height="160px">
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
