<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Halaman Sejarah</title>
</head>
<style>
    #carousel {
        width: 100%;
        align-items: center;
        justify-content: center;
        justify-items: center;
    }

    img {
        height: 500px;
        width: 100%;
    }
</style>

<body>
    <div class="container mt-sm-2">
        <div id="carousel" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?= url('assets/images/masjidraya.jpg');?>" alt="Gambar 1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="<?= url('assets/images/meuseum.jpg');?>" alt="Gambar 2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?= url('assets/images/mohaceh.jpg');?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div style="background-color:white" class="container p-3 my-3 border" id="form" method="POST">
        <div class="border-bottom border-black" style="margin: 16px; ">
            <p>
                <h2>SEJARAH WISATA ACEH</h2>
            </p>
        </div>
            <p>
                Aceh merupakan provinsi dengan julukan Serambi Mekkah yang kaya budaya dan indah alamnya. Dalam
                sejarahnya, Aceh pernah menjadi pusat kebudayaan Islam di Asia Tenggara pada abad ke-16.
            </p>
            <p>
                Berkunjung ke Aceh, Anda akan melihat berbagai peninggalan sejarah dan budaya Islam. Aceh juga
                merupakan pintu gerbang masuknya Islam ke Nusantara, dan pernah mendapat pengakuan dari Syarif Mekkah
                atas nama Khalifah Islam Turki Usmani.
            </p>
            <p>
                Selain sejarah yang gemilang, Aceh juga memiliki banyak potensi wisata yang luar biasa. Alamnya yang
                indah didukung budayanya yang kaya akan menyambut Anda sejak langkah pertama anda masuk ke Aceh. Hanya
                di Aceh pula Anda dapat menyaksikan sisa-sisa kedahsyatan gempa dan tsunami yang melanda tahun 2004
                silam untuk mempelajarinya.
            </p>
            <p>
                <strong>
                Situs PETA Aceh ini dimaksudkan untuk memudahkan para perencana tur, maupun wisatawan pada umumnya
                dalam menyusun paket wisata dan memilih fasilitas serta sarana wisata yang dibutuhkan dan tersedia di
                provinsi Aceh.
                </strong>
            </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>