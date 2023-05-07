@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata | Pemandu Wisata
@endsection
@section('content')
    <div class="container" id="container-pendaftaran_pemandu">
        <form action="{{ url('peta/pemanduwisata') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div style="background-color:white" class="container p-3 my-3 border">
                <div class="border-bottom border-black" style="margin: 16px; ">
                    <div class="title">
                        <h1>Format Pendaftaran Pemandu Wisata</h1>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control input_pendaftaran" placeholder="Nama">
                        </div>
                        <div class="col-sm-10">
                            <input type="number" name="umur" class="form-control input_pendaftaran" placeholder="Umur">
                        </div>
                        <div class="col-sm-10 margin-input">
                            <select class="form-select gender-option" name="gender" aria-label="Default select example">
                                <option class="gender-option" selected>Jenis Kelamin</option>
                                <option class="gender-option" value="Pria">Pria</option>
                                <option class="gender-option" value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="col-sm-10">
                            <input type="tel" name="kontak" class="form-control input_pendaftaran"
                                placeholder="Nomor HP">
                        </div>
                        <div class="col-sm-10">
                            @if (auth()->check())
                                <input type="email" name="email" class="form-control input_pendaftaran"
                                    placeholder="Email" value="{{ Auth::user()->email }}">
                            @else
                                <input type="email" name="email" class="form-control input_pendaftaran"
                                    placeholder="Email">
                            @endif
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label class="form-label form-control label_pendaftaran">Pilih Keahlian Bidang :</label>
                                <div class="form-check">
                                    <input class="form-check-input input_pendaftaran" type="checkbox" value="wisata_museum"
                                        id="wisata_museum" name="keahlian[]">
                                    <label class="form-check-label form-control label_pendaftaran"
                                        for="wisata_museum">Wisata
                                        Museum</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input input_pendaftaran" type="checkbox"
                                        value="wisata_sejarah_budaya" id="wisata_sejarah_budaya" name="keahlian[]">
                                    <label class="form-check-label form-control label_pendaftaran"
                                        for="wisata_sejarah_budaya">Wisata Sejarah
                                        dan Budaya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input input_pendaftaran" type="checkbox" value="wisata_religi"
                                        id="wisata_religi" name="keahlian[]">
                                    <label class="form-check-label form-control label_pendaftaran"
                                        for="wisata_religi">Wisata
                                        Religi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input input_pendaftaran" type="checkbox" value="wisata_kuliner"
                                        id="wisata_kuliner" name="keahlian[]">
                                    <label class="form-check-label form-control label_pendaftaran"
                                        for="wisata_kuliner">Wisata
                                        Kuliner</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input input_pendaftaran" type="checkbox" value="wisata_alam"
                                        id="wisata_alam" name="keahlian[]">
                                    <label class="form-check-label form-control label_pendaftaran" for="wisata_alam">Wisata
                                        Alam</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 margin-input">
                            <textarea name="kelebihan" id="kelebihan" placeholder="Kelebihan" style="width: 100%;"
                                class="border text_area_pendaftaran"></textarea>
                        </div>
                        <div class="col-sm-10 margin-input">
                            <textarea name="kekurangan" id="kekurangan" placeholder="Kekurangan" style="width: 100%;"
                                class="border text_area_pendaftaran"></textarea>
                        </div>
                        <div class="col-sm-10 margin-input">
                            <label class="form-label form-control label_pendaftaran">Upload CV: <input type="file"
                                    name="cv" accept="application/pdf">
                            </label>
                        </div>
                        <div>
                            <div class="card col-sm-3 margin-photo" style="width: 10rem;">
                                <div class="image_upload">
                                    <input class="input-gambar" type="file" name="gambar" id="userImage"
                                        accept="image/*"
                                        onchange="document.getElementById('selectedFileName').innerHTML = this.value.split('\\').pop()">
                                    <label for="userImage" class="label_pendaftaran">
                                        <div class="grid-container">
                                            <div class="grid-item">
                                                <img src="{{ asset('images/tambah.png') }}" class="card-img-top"
                                                    alt="value" onclick="">
                                            </div>
                                            <div class="grid-item">
                                                <div class="tambahkan-gambar">Tambah Gambar</div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <p id="selectedFileName"></p>
                            </div>
                        </div>
                        <div class="button d-flex justify-content-end">
                            <button type="submit" class="btn-kirim input_pendaftaran">Kirim
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection