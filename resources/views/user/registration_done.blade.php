@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Update Pemandu Wisata
@endsection

@section('content')
<div class="container" id="pemandu_wisata">
    <div class="title">
        <h1>Update Pemandu Wisata</h1>
    </div>

    <div class="detail-content">
        <form action="{{ route('registration.update', $registration->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="biodata-pemandu me-4">
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control detail-input" id="nama" name="nama" readonly value="{{ $registration->nama }}">
                </div>
                <div class="mb-1">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control detail-input" id="umur" name="umur" value="{{ $registration->umur }}">
                </div>
                <div class="mb-1">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control detail-input" id="jenis_kelamin" readonly name="jenis_kelamin" value="{{ $registration->gender }}">
                </div>
                <div class="mb-1">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="tel" class="form-control detail-input" id="nomor_hp" name="nomor_hp" value="{{ $registration->kontak }}">
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control detail-input" id="email" name="email" readonly value="{{ $registration->email }}">
                </div>
                <div class="mb-1">
                    <label for="keahlian" class="form-label">Keahlian</label>
                    <input type="text" class="form-control detail-input" id="keahlian" name="keahlian" value="{{ $registration->keahlian }}">
                </div>
                <div class="mb-1">
                    <label for="kelebihan" class="form-label">Kelebihan</label>
                    <textarea class="form-control detail-input" id="kelebihan" rows="3" name="kelebihan">{{ $registration->kelebihan }}</textarea>
                </div>
                <div class="mb-1">
                    <label for="kekurangan" class="form-label">Kekurangan</label>
                    <textarea class="form-control detail-input" id="kekurangan" rows="3" name="kekurangan">{{ $registration->kekurangan }}</textarea>
                </div>
            </div>
            <div class="foto-pemandu">
                <div class="mb-1">
                    <label for="gambar" class="form-label">Gambar</label>
                    <img src="{{ asset('gambar/' . $registration->gambar) }}" alt="Old Image" class="old-image" width="260px" height="260px">
                </div>
                <div class="mb-1">
                    <label for="gambar" class="form-label">Gambar Baru</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection