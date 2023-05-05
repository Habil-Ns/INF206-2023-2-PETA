@extends('layouts.navigation')

@section('title')
    PETA-Pemandu Wisata
@endsection

@section('content')
<header class="header container mt-4">
        <div class="rows">
            <div class="content">
                <h1 class="header_content">Pariwisata Banda Aceh</h1>
                <p>Aceh adalah sebuah daerah yang terletak di ujung barat Indonesia yang memiliki julukan sebagai
                    Serambi Mekkah karena pengaruh agama dan kebudayaan islam yang kuat. Aceh memiliki pesona alam dan
                    sejarah yang menakjubkan, terutama di Banda Aceh yang memiliki banyak tempat wisata yang wajib
                    dikunjungi. Jika Anda ingin mengeksplorasi tempat wisata di Banda Aceh, maka memesan pemandu wisata
                    akan menjadi pilihan yang tepat. Pemandu wisata akan memandu dan memberikan penjelasan tentang
                    tempat tempat wisata dan budaya di Banda Aceh, sehingga Anda akan mendapatkan pemahaman yang lebih
                    dalam tentang Aceh. Oleh karena itu, memesan pemandu wisata sekarang akan membantu Anda
                    memaksimalkan pengalaman wisata dan membuatnya tak terlupakan.</p>
            </div>
            <div class="swiper-containers custom-swiper image_content" style="overflow: hidden;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{asset ('images/Beranda_Masjid_Baiturrahman.png')}}" alt="Masjid Baiturrahman" srcset=""
                            class="img-fluid" width="458px" height="329px"></div>
                    <div class="swiper-slide"><img src="{{asset ('images/Beranda_museum_aceh.png')}}" alt="Museum Aceh" srcset=""
                            class="img-fluid" width="458px" height="329px"></div>
                    <div class="swiper-slide"><img src="{{asset ('images/Beranda_museum_tsunami.png')}}" alt="Museum Tsunami" srcset=""
                            class="img-fluid" width="458px" height="329px"></div>
                    <div class="swiper-slide"><img src="{{asset ('images/Beranda_pltd_apung.png')}}" alt="PLTD Apung" srcset=""
                            class="img-fluid" width="458px" height="329px"></div>
                    <div class="swiper-slide"><img src="{{asset ('images/Beranda_Pantai_Lampuuks.png')}}" alt="Pantai Lampuuk" srcset=""
                            class="img-fluid" width="458px" height="329px"></div>
                    <div class="swiper-slide"><img src="{{asset ('images/Beranda_Airterjun_kutamalaka.png')}}" alt="Air Terjun Kuta Malaka" srcset=""
                            class="img-fluid" width="458px" height="329px"></div>
                </div>
            </div>
        </div>
        <button class="btn-pesan_landing">
            <a href="{{url ("peta/pemanduwisata")}}" class="pesan-pemandu">Pesan Pemandu</a>
        </button>
    </header>
    @include('layouts.footer')
@endsection