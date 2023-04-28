@extends('layouts.navigation')


@section('title')
PETA-Pemandu Wisata | Sejarah
@endsection

@section('content')
<div class="container margin-sejarah">
    <div id="carousel" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="image-sejarah" src="{{ asset('images/masjidrayaaceh.jpg') }}" alt="Masjid Raya"
                    class="img-fluid">
            </div>
            <div class="carousel-item">
                <img class="image-sejarah" src="{{ asset('images/meuseum.jpg') }}" alt="Museum Tsunami"
                    class="img-fluid">
            </div>
            <div class="carousel-item">
                <img class="image-sejarah" src="{{ asset('images/mohaceh.jpg') }}" alt="Rumah Aceh" class="img-fluid">
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
<div class="container mt-4">
    <div class="title">
        <h1>Sejarah Aceh</h1>
    </div>
    <div class="text-sejarah">
        <p>
        Aceh merupakan daerah yang terletak di bagian paling Barat gugusan kepulauan Nusantara yang memiliki posisi strategis sebagai gerbang perdagangan dan pertukaran budaya antara Timur dan Barat selama berabad-abad. Para pedagang dari Cina, Eropa, India, dan Arab sering singgah di Aceh, sehingga membuat Aceh menjadi daerah pertama yang memperkenalkan budaya dan agama di Indonesia. Meskipun agama Hindu dan Buddha diperkenalkan oleh pedagang India pada abad ke-7, peran Aceh semakin menonjol dengan masuknya agama Islam yang diperkenalkan oleh pedagang Gujarat dari Arab pada akhir abad ke-9.
        </p>
        <p>
        Aceh dianggap sebagai tempat pertama masuknya agama Islam di Indonesia dan juga tempat berdirinya kerajaan Islam pertama di Indonesia, yaitu Peureulak dan Pasai. Kerajaan ini dibangun oleh Sultan Ali Mughayatsyah dan ibukotanya berada di Bandar Aceh Darussalam (kini Banda Aceh) serta wilayah kekuasaannya meliputi sebagian besar pantai Barat dan Timur Sumatra hingga Semenanjung Malaka. Kemudian, Kesultanan Aceh terbentuk dan mempersatukan seluruh kerajaan kecil di Aceh. Pada masa pemerintahan Sultan Iskandar Muda pada awal abad ke-17, Kesultanan Aceh mencapai puncak kejayaannya. Kehidupan masyarakat Aceh dipengaruhi secara signifikan oleh agama dan kebudayaan Islam sehingga Aceh dijuluki sebagai "Seuramo Mekkah" (Serambi Mekkah).
        </p>
        <p>
        Aceh, khususnya Banda Aceh, memiliki banyak tempat bersejarah yang menarik untuk dikunjungi seperti Masjid Raya Baiturrahman, Museum Tsunami Aceh, dan Museum Aceh. Dengan mengunjungi tempat-tempat tersebut, Anda tidak hanya dapat menikmati keindahan sejarah dan budaya Aceh, tetapi juga dapat membantu mendukung pariwisata lokal dan perekonomian masyarakat setempat. Oleh karena itu, mari kita jaga dan lestarikan warisan sejarah dan budaya Aceh dengan cara mengunjungi tempat-tempat wisata di sana.
        </p>
    </div>
</div>
@endsection