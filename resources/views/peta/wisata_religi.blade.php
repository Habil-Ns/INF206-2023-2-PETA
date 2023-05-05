@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Wisata Banda Aceh
@endsection


@section('content')
    <div class="container mt-5" id="wisata_religi">
        <div class="row">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/Masjid_Baiturrahman.jpg')}}"  alt="Masjid Raya Baiturrahman" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Masjid Raya Baiturrahman</h1>
                        <p>Masjid Raya Baiturrahman dibangun pada 1022H/1612M di bawah kepemimpinan Sultan Iskandar Muda dari Kesultanan Aceh Darussalam. Sejak awal, Masjid Raya Baiturrahman tidak hanya diperuntukkan untuk kegiatan ibadah saja, namun juga menjadi pusat pendidikan ilmu agama Islam pada masa Kesultanan Aceh. Saat masa perang Aceh melawan Belanda, Masjid Raya Baiturrahman menjadi benteng pertahanan rakyat Aceh dan Masjid ini juga merupakan salah satu bangunan yang masih selamat dan tetap berdiri kokoh pada saat terjadinya Tsunami 2004 silam.</p>
                        <p>Masjid Raya Baiturrahman terletak di Jl. Moh. Jam No.1, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-1 mt-3">
                <img src="{{asset ('images/Masjid_Baiturrahim.jpg')}}" alt="Masjid Baiturrahim" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Masjid Baiturrahim</h1>
                        <p>Masjid Baiturrahim dibangun sekitar abad ke-17 oleh sultan Aceh. Dahulu, namanya adalah Masjid Jami' Ulee Lheue. Kemudian, perang pecah antara Kesultanan Aceh dan Belanda. Pada tahun 1873, pasukan musuh membakar Masjid Raya Baiturrahman. Seluruh jamaah terpaksa melakukan shalat Jumat di Ulee Lheue. Sejak saat itulah, nama bangunan ini menjadi Masjid Baiturrahim. Ketika bencana tsunami itu terjadi, Masjid Baiturrahim tetap kokoh berdiri sehingga menjadi salah satu dari sedikit bangunan yang bertahan usai diterjang tsunami.</p>
                        <p>Masjid Baiturrahim terletak di persimpangan menjelang Pelabuhan Ulee Lheue.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/Masjid_baitulmusyahadah.jpg')}}"  alt="Masjid Baitul Musyahadah" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Masjid Baitul Musyahadah</h1>
                        <p>Masjid Baitul Musyahadah merupakan satu-satunya masjid di Banda Aceh yang memiliki kubah berbentuk kupiah yang juga dikenal dengan sebutan Masjid Kupiah Meukeutop (topi tradisional Aceh) atau Masjid Teuku Umar. Dengan bentuk kubahnya yang seperti itu, maka masjid tersebut berbeda dengan beberapa masjid lainnya dimana sebuah kubah masjid biasanya hanya berbentuk bundar atau kubah seperti umumnya. Bangunan masjid Baitul Musyahadah terkesan cukup megah ditambah dengan dinding catnya yang berwarna putih.</p>
                        <p>Masjid Baitul Musyahadah terletak di Jl.  Teuku Umar, Geuceu Kayee Jato, Kec. Banda Raya, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3 mb-4">
            <div class="col-md-6 order-1 mt-3 ">
                <img src="{{asset ('images/Masjid_keucikleumik.jpg')}}" alt="Masjid Haji Keuchik Leumiek" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Masjid Haji Keuchik Leumiek</h1>
                        <p>Masjid Haji Keuchik Leumiek juga dikenal sebagai Masjid Emas Aceh karena mayoritas warna yang digunakan di masjid ini adalah kuning keemasan. Terutama pada malam hari, keindahan masjid semakin terpancar karena adanya sungai di seberang yang memantulkan cahaya masjid. Pada siang hari, kubah masjid yang menonjol semakin memperindah bangunan di atas tanah seluas 3.500 meter. Masjid ini dibangun oleh Haji Harun Keuchik Leumik, yang mana nama masjid berasal dari nama ayah dari wartawan senior, kolektor benda bersejarah, pengusaha logam mulia, dan budayawan terkenal dari Aceh tersebut.</p>
                        <p>Masjid Haji Keuchik Leumiek terletak di Lamseupeung, Kec. Lueng Bata, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
@include('layouts.footer')
@endsection