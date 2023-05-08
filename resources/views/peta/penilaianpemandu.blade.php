@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Penilaian Pemandu
@endsection

@section('content')
    <div class="container" style="margin-top: 3.5rem">
        <div class="title">
            <h1>Penilaian Pemandu Wisata</h1>
        </div>
        <form action="{{ url('peta/hubungi&penilaian/penilaianpemandu') }}" method="POST" enctype="multipart/form-data"
            style="max-width: 900px; margin: 2.1rem auto">
            @csrf
            <div class="mb-3">
                <label class="hubungikami-text" for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control my-input" id="exampleInputName"
                    aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <select class="form-select pemandu-option" name="pemandu" aria-label="Default select example">
                    <option class="pemandu-option" selected>Pilih Pemandu Wisata</option>
                    @foreach ($registrations as $registration)
                        <option class="pemandu-option" value="{{ $registration->nama }}">{{ $registration->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="hubungikami-text" for="exampleFormControlTextarea1" class="form-label">Penilaian Pemandu
                    Wisata</label>
                <div class="penilaian">
                    <span>
                        <input type="radio" id="star5a" data-product-id="@Model.ProductId" class="star"
                            name="rate" value="5" />
                        <label for="star5a" title="5 Stars"></label>
                        <input type="radio" id="star4a" data-product-id="@Model.ProductId" class="star"
                            name="rate" value="" />
                        <label for="star4a" title="4 Star"></label>
                        <input type="radio" id="star3a" data-product-id="@Model.ProductId" class="star"
                            name="rate" value="3" />
                        <label for="star3a" title="3 Star"></label>
                        <input type="radio" id="star2a" data-product-id="@Model.ProductId" class="star"
                            name="rate" value="2" />
                        <label for="star2a" title="2 Stars"></label>
                        <input type="radio" id="star1a" data-product-id="@Model.ProductId" class="star"
                            name="rate" value="1" />
                        <label for="star1a" title="1 Star"></label>
                    </span>
                </div>
            </div>
            <div class="button d-flex justify-content-end" style="margin-top: 3.5rem">
                <button type="submit" class="btn-kirim input_pendaftaran">Kirim
                </button>
            </div>
        </form>
    </div>
@endsection