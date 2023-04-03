@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata
@endsection

@section('content')
    <header class="header">
        <div class="container rows">
            <div class="content">
                <h1 class="header_content">Pariwisata Banda Aceh</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis expedita ducimus soluta quidem nesciunt. Sint, veritatis possimus tempore repellendus molestiae optio. Rerum, minima! Non, pariatur.</p>
            </div>
            <div class="image_content">
                <img src="{{ asset('images/Masjidraya.jpg') }}" alt="Tempat wisata" class="image_content">
            </div>
        </div>
    </header>
@endsection