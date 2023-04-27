@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Hotel
@endsection

@section('content')

    <div class="container mt-5" id="hotel">
        <div class="row">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <div class="swiper-container custom-swiper" style="overflow: hidden;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/hotel1.jpg')}}" alt="Kyriad Muraya Hotel Aceh" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel1.2.jpg')}}" alt="Kamar Tidur" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel1.3.jpg')}}" alt="Kamar Mandi" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel1.4.jpg')}}" alt="Restoran Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Kyriad Muraya Hotel Aceh</h1>
                        <p>Kyriad Muraya Hotel Aceh merupakan sebuah hotel bintang 4 yang berlokasi di Banda Aceh. Hotel ini menyediakan berbagai fasilitas yang mencakup restoran, resepsionis 24 jam, WiFi, lift, area parkir, AC, TV, kulkas, fasilitas rapat, serta fasilitas lainnya. Harga kamar di Kyriad Muraya Hotel Aceh dimulai dari Rp. 1.020.000 per malam.</p>
                        <p>Kyriad Hotel Muraya Aceh berlokasi di Jl. Teuku Moh. Daud Beureueh No.5, Laksana, Kec. Kuta Alam, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <div class="swiper-container custom-swiper" style="overflow: hidden;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/hotel2.jpg')}}" alt="Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel2.1.png')}}" alt="Kamar Tidur" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel2.2.png')}}" alt="Kamar Mandi" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel2.3.png')}}" alt="Restoran Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Ayani Hotel</h1>
                        <p>Ayani Hotel adalah sebuah hotel bintang 3 yang menyediakan berbagai fasilitas untuk para tamu. Beberapa fasilitas yang disediakan antara lain adalah area parkir, restoran, lift, WiFi, TV kabel, resepsionis 24 jam, serta beberapa fasilitas lainnya. Harga kamar di Ayani Hotel dimulai dari Rp. 600.000 per malam.</p>
                        <p>Ayani Hotel berlokasi di Jl. Jend. Ahmad Yani No.20, Peunayong, Kec. Kuta Alam, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center my-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <div class="swiper-container custom-swiper" style="overflow: hidden;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/hotel4.png')}}" alt="Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel4.1.png')}}" alt="Kamar Tidur" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel4.2.png')}}" alt="Kamar Mandi" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel4.3.png')}}" alt="Restoran Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel4.4.png')}}" alt="Kolam Renang" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Hermes Palace</h1>
                        <p>Hermes Palace adalah hotel bintang 5 yang terletak di Banda Aceh. Hotel ini menyediakan banyak fasilitas seperti tempat parkir, lift, restoran, WiFi, resepsionis 24 jam, AC, ruang pertemuan, kolam renang, televisi, kulkas, fasilitas rapat, komputer, layanan pijat, penitipan anak, pusat kebugaran, serta fasilitas lainnya. Tarif kamar di hotel Hermes Palace mulai dari 975.000 per malam.</p>
                        <p>Hermes Palace berlokasi di Jl. T. Panglima Nyak Makam, Lambhuk, Kec. Ulee Kareng, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <div class="swiper-container custom-swiper" style="overflow: hidden;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset ('images/hotel3.png')}}" alt="Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel3.1.png')}}" alt="Kamar Tidur" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel3.2.png')}}" alt="Kamar Mandi" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                        <div class="swiper-slide"><img src="{{asset ('images/hotel3.3.png')}}" alt="Restoran Hotel" srcset=""
                                class="img-fluid" width="458px" height="329px"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Grand Arabia Hotel</h1>
                        <p>Grand Arabia Hotel adalah sebuah hotel bintang 3 yang terletak di Banda Aceh dan menyediakan berbagai fasilitas untuk kenyamanan tamu. Beberapa fasilitas yang tersedia di antaranya adalah area parkir, WiFi, restoran, TV, resepsionis 24 jam, AC, fasilitas rapat, layanan pijat, serta beberapa fasilitas lainnya. Harga kamar di hotel ini dimulai dari 798.900 per malam.</p>
                        <p>Grand Arabia Hotel berlokasi di Jl. Prof. A. Majid Ibrahim II No.3, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
@endsection