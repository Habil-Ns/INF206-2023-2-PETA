@extends('layouts.navigation')
 
@section('title')
  PETA-Pemandu Wisata | Peta Banda Aceh
@endsection


@section('content')
<div class="container mt-5">
  <div class="peta-bandaaceh">
    <img src="{{asset ('images/map.png')}}" alt="Peta Banda Aceh">
        <div class="map"><a href="https://www.google.com/maps?q=Banda+Aceh">Lihat di Google Maps</a></div>
  </div>
  <div class="title-petabandaaceh mt-2">
      <h1>Peta Banda Aceh</h1>
  </div>
</div>  
@endsection