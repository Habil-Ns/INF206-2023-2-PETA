@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection

@section('content')
    <div class="container">
        <div class="title">
            <h1>Pariwisata Banda Aceh</h1>
        </div>
        <div class="hubungi">
            Hubungi Kami
        </div>
        <form style="max-width: 900px; margin: 0 auto">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div style="text-align: right; padding: 20px">
                <button type="submit" class="btn btn-primary rounded-pill">Kirim</button>
            </div>
          </form>
    </div>
@endsection