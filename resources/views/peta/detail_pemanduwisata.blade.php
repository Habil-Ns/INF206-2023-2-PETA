@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection

@section('content')
@if(auth()->check() && auth()->user()->can('admin') && $registration->status === 'Pending')
    <div class="container" id="pemandu_wisata">
        <div class="title">
            <h1>Pemandu Wisata</h1>
        </div>

        <div class="detail-content">
            <div class="biodata-pemandu me-4">
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control detail-input" id="nama" style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->nama}}">
                </div>
                <div class="mb-1">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control detail-input" id="umur"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->umur}}">
                </div>
                <div class="mb-1">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control detail-input" id="jenis_kelamin"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->gender}}">
                </div>
                <div class="mb-1">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="tel" class="form-control detail-input" id="nomor_hp"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->kontak}}">
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control detail-input" id="email"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->email}}">
                </div>
                <div class="mb-1">
                    <label for="keahlian" class="form-label">Keahlian</label>
                    <input type="text" class="form-control detail-input" id="keahlian" style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{ $registration->keahlian }}">
                </div>
                <div class="mb-1">
                    <label for="kekurangan" class="form-label">Kelebihan</label>
                    <textarea class="form-control detail-input" id="kekurangan" rows="3" style="background-color: #E2F4FF; border: 1px solid black;" readonly>{{$registration->kelebihan}}</textarea>
                </div>
                <div class="mb-1">
                    <label for="kekurangan" class="form-label">Kekurangan</label>
                    <textarea class="form-control detail-input" id="kekurangan" rows="3" style="background-color: #E2F4FF; border: 1px solid black;" readonly>{{$registration->kekurangan}}</textarea>
                </div>

            </div>
            <div class="foto-pemandu">
                @if($registration->gambar)
                    <img src="{{ asset('gambar/'. $registration->gambar) }}" alt="Profile Pemandu Wisata" width="260px" height="260px">
                @else
                    <img src="{{ asset('images/profile_pemandu.jpg') }}" alt="Profile Pemandu Wisata" width="260px" height="260px">
                @endif
                    <button class="button-kembali">
                        <a href="{{url ("peta/pemanduwisata")}}" class="btn btn-kembali">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            Kembali
                        </a>
                    </button>
            </div>
        </div>
    </div>
    @elseif ($registration->status !== 'Pending')
    <div class="container" id="pemandu_wisata">
        <div class="title">
            <h1>Pemandu Wisata</h1>
        </div>

        <div class="detail-content">
            <div class="biodata-pemandu me-4">
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control detail-input" id="nama" style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->nama}}">
                </div>
                <div class="mb-1">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control detail-input" id="umur"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->umur}}">
                </div>
                <div class="mb-1">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control detail-input" id="jenis_kelamin"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->gender}}">
                </div>
                <div class="mb-1">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="tel" class="form-control detail-input" id="nomor_hp"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->kontak}}">
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control detail-input" id="email"
                        style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{$registration->email}}">
                </div>
                <div class="mb-1">
                    <label for="keahlian" class="form-label">Keahlian</label>
                    <input type="text" class="form-control detail-input" id="keahlian" style="background-color: #E2F4FF; border: 1px solid black;" readonly value="{{ $registration->keahlian }}">
                </div>
                <div class="mb-1">
                    <label for="kekurangan" class="form-label">Kelebihan</label>
                    <textarea class="form-control detail-input" id="kekurangan" rows="3" style="background-color: #E2F4FF; border: 1px solid black;" readonly>{{$registration->kelebihan}}</textarea>
                </div>
                <div class="mb-1">
                    <label for="kekurangan" class="form-label">Kekurangan</label>
                    <textarea class="form-control detail-input" id="kekurangan" rows="3" style="background-color: #E2F4FF; border: 1px solid black;" readonly>{{$registration->kekurangan}}</textarea>
                </div>
            </div>
            <div class="foto-pemandu">
                @if($registration->gambar)
                    <img src="{{ asset('gambar/'. $registration->gambar) }}" alt="Profile Pemandu Wisata" width="260px" height="260px">
                @else
                    <img src="{{ asset('images/profile_pemandu.jpg') }}" alt="Profile Pemandu Wisata" width="260px" height="260px">
                @endif
                <div style="margin-top: 156%">
                    @if (auth()->check() && (auth()->user()->can('admin') || auth()->user() && $registration->status === 'Cuti'))
                    <div style="display: inline-block; margin-right:10px;" >
                        <a href="{{ route('registration.edit', ['id' => $registration->id]) }}" class="btn btn-primary">Update</a>
                    </div>
                    @endif
                    <div style="display: inline-block;">
                        <button class="button-kembali">
                            <a href="{{ url('peta/pemanduwisata') }}" class="btn btn-kembali">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                Kembali
                            </a>
                        </button>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endif

@endsection