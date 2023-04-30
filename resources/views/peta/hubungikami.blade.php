@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection

@section('content')
    <div class="container my-5">
        <div class="title">
            <h1>Pariwisata Banda Aceh</h1>
        </div>
        <div class="hubungi">
            Hubungi Kami
        </div>
        <form action="{{url('peta/hubungikami')}}" method="POST" enctype="multipart/form-data" style="max-width: 900px; margin: 0 auto">
            @csrf
            <div class="mb-3">
              <label class="hubungikami-text" for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control my-input" id="exampleInputName" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label class="hubungikami-text"for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control my-input" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label class="hubungikami-text" for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                <textarea name="komentar" class="form-control my-input" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="button d-flex justify-content-end mt-5">
                <button type="submit" class="btn-kirim input_pendaftaran">Kirim
                    </button>
            </div>
          </form>
    </div>
@endsection