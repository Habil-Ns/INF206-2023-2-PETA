@extends('user.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat datang, {{ auth()->user()->username }}</h1>
            @if(auth()->check() && auth()->user()->registration && (auth()->user()->registration->status === 'Diterima' || auth()->user()->registration->status === 'Cuti'))
            Selamat, kamu telah diterima sebagai pemandu wisata!
            @endif
        
    </div>

    @can('admin')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">
                                    {{ __('Selamat datang') }} {{ auth()->user()->name }} !
                                </p>
                                <div style="display:flex; justify-content:center;">
                                    <p class="circle">
                                        @php
                                            $count = 0;
                                            foreach ($registrations as $registration) {
                                                if ($registration->status == "Pending") {
                                                    $count++;
                                                }
                                            }
                                            echo $count;
                                        @endphp
                                    </p>
                                </div>
                                <div class="p-1">
                                    <p class="text-center"
                                        style="font-family: 'Source Serif Pro'; font-size:'30px'; font-weight:700">
                                        Jumlah Pendaftar Pemandu
                                    <p style="border:1px solid #000000;"></p>
                                    </p>
                                </div>
                                @foreach ($registrations as $registration)
                                    @if ($registration->status == 'Pending')
                                        <div class="p-3 d-flex justify-content-between align-items-center"
                                        style="background-color: #A8D672; border-radius:10px; font-family:'Source Serif Pro'; font-weight:600; text-align:left; margin-bottom: 15px">
                                        <p class="m-0">Nama : {{ $registration->nama }}</p>
                                        <div class="d-flex">
                                            <form method="POST"
                                                action="{{ url("peta/pemanduwisata/$registration->nama/terima") }}">
                                                @csrf
                                                @method('PUT')
                                                    <button
                                                    style="border-radius:10px; font-family:'Patua One'; font-weight: 400; color:#000000"
                                                    type="submit" class="btn btn-terima btn-primary">
                                                    Terima</button>
                                            </form>
                                            <form action="{{ url('peta/pemanduwisata/' . $registration->nama) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                style="border-radius:10px; font-family:'Patua One'; font-weight: 400; color:#000000; margin-left:10px;"
                                                type="submit" class="btn btn-tolak btn-danger"
                                                onclick="return confirm('Are you sure you want to reject this registration?')">Tolak</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                <div class="p-1">
                                    <p class="text-center"
                                        style="font-family: 'Source Serif Pro'; font-size:'30px'; font-weight:700">
                                        Daftar Pemandu Wisata : 
                                        @php
                                        $count = 0;
                                        foreach ($registrations as $registration) {
                                            if ($registration->status == "Cuti" || $registration->status == 'Diterima') {
                                                $count++;
                                            }
                                        }
                                        echo $count;
                                    @endphp
                                    </p>
                                @foreach ($registrations as $registration)
                                    @if ($registration->status == 'Diterima' || $registration->status == 'Cuti')
                                    <div class="p-3 d-flex justify-content-between align-items-center"
                                    style="background-color: #A8D672; border-radius:10px; font-family:'Source Serif Pro'; font-weight:600; text-align:left; margin-bottom: 15px">
                                    <p class="m-0">Nama : {{ $registration->nama }}</p>
                                    <div class="d-flex">
                                        <form method="POST"
                                            action="{{ url("peta/pemanduwisata/$registration->nama/terima") }}">
                                            @csrf
                                            @method('PUT')
                                                <button
                                                style="border-radius:10px; font-family:'Patua One'; font-weight: 400; color:#000000"
                                                type="submit" class="btn btn-terima btn-primary">
                                                Aktif</button>
                                        </form>
                                        <form action="{{ url('peta/pemanduwisata/' . $registration->nama) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                            style="border-radius:10px; font-family:'Patua One'; font-weight: 400; color:#000000; margin-left:10px;"
                                            type="submit" class="btn btn-tolak btn-danger"
                                            onclick="return confirm('Are you sure you want to reject this person?')">Pecat</button>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan


@endsection