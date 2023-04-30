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
            <div class="button-pesan">
                <button class="btn-pesan">
                    <a href="#" class="text-pesan">Pesan</a>
                </button>
            </div>
            <div class="button-detail">
                <button class="btn-detail">
                    <a href="{{url ("peta/pemanduwisata/$registration->nama")}}" class="detail-pemandu">Detail</a>
                </button>
            </div>
            <div class="profile-pemandu">
                @if($registration->gambar)
                <img src="{{ asset('gambar/'. $registration->gambar) }}" alt="Profile Pemandu Wisata" width="160px"
                    height="160px">
                @else
                <img src="{{ asset('images/profile_pemandu.jpg') }}" alt="Profile Pemandu Wisata" width="160px"
                    height="160px">
                @endif
            </div>
        </div>
    </div>
    <div class="biodata_wisatawan">
        <form action="{{url('peta/pemesanan')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="biodata_wisatawan-content">
            <h3 class="biodata_wisatawan-title">
                Form Pemesanan
            </h3>
            <i class="uil uil-times biodata_wisatawan-close"></i>
            <ul class="biodata_wisatawan-margin grid">
                <div class="data-wisatawan col-sm-10">
                    <input type="text" name="nama" class="form-control input_pendaftaran" placeholder="Nama">
                </div>
                <div class="data-wisatawan col-sm-10">
                    <input type="number" name="umur" class="form-control input_pendaftaran" placeholder="Umur">
                </div>
                <div class="data-wisatawan col-sm-10">
                    <input type="tel" name="nohp" class="form-control input_pendaftaran" placeholder="Nomor HP">
                </div>
                <div class="data-wisatawan col-sm-10 margin-input">
                    <select class="form-select gender-option" name="gender" aria-label="Default select example">
                        <option class="gender-option" selected>Jenis Kelamin</option>
                        <option class="gender-option" value="Pria">Pria</option>
                        <option class="gender-option" value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="button d-flex justify-content-end mt-3">
                    <button type="submit" class="btn-kirim input_pendaftaran">Pesan
                    </button>
                </div>
            </ul>
        </div>
    </form>
    </div>
    @endif
    @endforeach
</div>
@endsection