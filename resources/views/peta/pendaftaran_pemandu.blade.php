<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Format Pendaftaran Pemandu Wisata</title>
    <style>
        .image_upload>input {
            display: none;
        }

        input {
            margin: 3px;
        }

        select {
            margin: 3px;
        }

        textarea {
            margin: 3px;
        }

        label {
            margin: 3px;
        }
    </style>
</head>

<body>
    <div style="background-color:white" class="container p-3 my-3 border" id="form" method="POST">
        <div class="border-bottom border-black" style="margin: 16px; ">
            <h1>
                <strong>Format Pendaftaran Pemandu Wisata</strong>
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col-sm-10">
                <input type="number" name="umur" class="form-control" placeholder="Umur">
            </div>
            <div class="col-sm-10">
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin">
            </div>
            <div class="col-sm-10">
                <input type="tel" name="contact" class="form-control" placeholder="Nomor HP">
            </div>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    <label class="form-label form-control">Pilih Keahlian Bidang :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="option1" id="option1" name="options[]">
                        <label class="form-check-label form-control" for="option1">Wisata Museum</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="option2" id="option2" name="options[]">
                        <label class="form-check-label form-control" for="option2">Wisata Sejarah dan Budaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="option3" id="option3" name="options[]">
                        <label class="form-check-label form-control" for="option3">Wisata Regligi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="option1" id="option1" name="options[]">
                        <label class="form-check-label form-control" for="option1">Wisata Kuliner</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="option1" id="option1" name="options[]">
                        <label class="form-check-label form-control" for="option1">Wisata Alam</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <textarea placeholder="Kelebihan" style="width: 100%;" class="border"></textarea>
            </div>
            <div class="col-sm-10">
                <textarea placeholder="Kekurangan" style="width: 100%;" class="border"></textarea>
            </div>
            <div class="col-sm-10">
                <label class="form-label form-control">Upload CV: <input type="file" name="cv" accept="application/pdf">
                </label>
            </div>
            <div>
                <div class="card col-sm-3" style="width: 10rem;">
                <img src="<?= url('assets/images/tambah.png');?>" class="card-img-top" alt="value" onclick="">
                    <div class="image_upload" style="text-align: center; margin: 3px;">
                        <label for="userImage">
                            <a class="btn btn-secondary btn-sm" rel="nofollow">
                                <span class='glyphicon glyphicon-paperclip; '></span> Tambahkan Foto Diri</a>
                        </label>
                        <input type="file" name="userImage" id="userImage" accept="image/*">
                    </div>
                </div>

            </div>
        </div>
        <div class="button d-flex justify-content-end">
            <input type="submit" value="Kirim" class="btn btn-primary">
        </div>

    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>
=======
@extends('layouts.navigation')

@section('title')
PETA-Pemandu Wisata | Pemandu Wisata
@endsection
@section('content')
<div class="container mt-5">
    <form action="{{url('peta/pemanduwisata')}}" method="Post" enctype="multipart/form-data">
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
                        <input type="tel" name="kontak" class="form-control input_pendaftaran" placeholder="Nomor HP">
                    </div>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control input_pendaftaran" placeholder="Email">
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
                        <label class="form-label form-control label_pendaftaran">Upload CV: <input type="file" name="cv"
                                accept="application/pdf">
                        </label>
                    </div>
                    <div>
                        <div class="card col-sm-3 margin-photo" style="width: 10rem;">
                            <div class="image_upload">
                                <input class="input-gambar" type="file" name="gambar" id="userImage" accept="image/*"
                                    onchange="document.getElementById('selectedFileName').innerHTML = this.value.split('\\').pop()">
                                <label for="userImage" class="label_pendaftaran">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <img src="{{ asset('images/tambah.png') }}" class="card-img-top" alt="value"
                                                onclick="">
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
>>>>>>> 2108107010089-HabilNs
