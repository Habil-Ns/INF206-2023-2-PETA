@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection

@section('content')
    <div class="container" id="pemandu_wisata">
        <div class="title">
            <h1>Pemandu Wisata</h1>
        </div>
        <div class="detail-content">
            <div class="biodata-pemandu">
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled>
                </div>
                <div class="mb-1">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled>
                </div>
                <div class="mb-1">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled>
                </div>
                <div class="mb-1">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="tel" class="form-control" id="nomor_hp"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled>
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled>
                </div>
                <div class="mb-1">
                    <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                    <input type="text" class="form-control" id="bidang_keahlian"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled>
                </div>
                <div class="mb-1">
                    <label for="kelebihan" class="form-label">Kelebihan</label>
                    <textarea class="form-control" id="kelebihan" rows="3"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled></textarea>
                </div>
                <div class="mb-1">
                    <label for="kekurangan" class="form-label">Kekurangan</label>
                    <textarea class="form-control" id="kekurangan" rows="3"
                        style="background-color: #E2F4FF; border: 1px solid black;" disabled></textarea>
                </div>
            </div>
            <div class="foto-pemandu">
                <img src="{{asset ('images/profile_pemandu.jpg')}}" alt="Profile Pemandu Wisata" width="200px" height="200px">
            </div>
        </div>
    </div>
@endsection