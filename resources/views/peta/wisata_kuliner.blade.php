@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Wisata Banda Aceh
@endsection


@section('content')
    <div class="container margin-wisata" id="wisata_kuliner">
        <div class="row">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/sate_matang_dwan.jpg')}}"  alt="Sate Matang D'Wan" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Sate Matang D'Wan</h1>
                        <p>Sate Matang berasal dari kota kecil Matang Geulumpang Dua di Kabupaten Bireuen, Aceh, dan Warung Sate Matang D'wan buka setiap hari dari pukul 08.30-24.00 WIB. Untuk satu porsi sate Matang D'wan, termasuk nasi, 10 tusuk sate (daging sapi), bumbu kacang, dan kuah kaldu, harganya hanya Rp25 ribu. Selain itu, pelanggan bisa menambah tusuk sate dengan harga Rp2500 per tusuknya. Darmawan, pemilik warung, menyajikan sate Matang dengan ukuran yang lumayan besar. Sebelum dibakar, daging sapi dipotong-potong dan direndam dalam bumbu khas Aceh yang diracik sendiri. Kemudian, daging yang telah direndam dibakar di atas arang.</p>
                        <p>Sate Matang D'Wan berlokasi di Blang Cut, Kec. Lueng Bata, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-1 mt-3">
                <img src="{{asset ('images/mie_aceh_razali.jpg')}}" alt="Mie Razali" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Mie Razali</h1>
                        <p>Mie Aceh memiliki ciri khas rasa gurih dan tekstur mie yang tebal. Mie Razali menyajikan dua jenis mie, yaitu mie biasa dan mie spesial. Mie Aceh biasa ala Razali terbuat dari mie tepung yang dicampur dengan sayuran seperti toge dan kol yang telah dibalur dengan bumbu halus. Mie Aceh biasa dihargai sebesar Rp 10.000 per porsi. Sedangkan untuk mie Aceh spesial yang dilengkapi dengan tambahan udang, cumi, daging atau kepiting, dihargai sebesar Rp 25.000 per porsi. Jika ingin menikmati keempat rasa tersebut dalam satu hidangan maka cukup membayar Rp 45.000.</p>
                        <p>Mie Razali berlokasi di Jl. T. Panglima Polem No.93, Peunayong, Kuta Alam, Banda Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/bu_sie_itek.jpg')}}"  alt="Bu Sie Itek Bireuen Ustadz Heri" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Bu Sie Itek Bireuen Ustadz Heri</h1>
                        <p>Bu Si Itek Bireuen berarti nasi daging bebek dari Bireuen. Kuliner khas Aceh itu kaya akan rempah. NASI bebek menjadi menu andalan Bu Si Itek Bireuen. Potongan daging bebek di atas piring-piring saji itu memang berkubang bumbu kari. Warnanya merah kecokelatan dengan tekstur seperti santan kental. Bagi restoran, nanas adalah buah yang paling tepat untuk mendampingi nasi bebek. Maka, sejak awal berdiri, rumah makan di samping Pasar Setui tersebut selalu menyertakan potongan nanas dalam porsi makanan yang disajikan untuk pelanggan. Harga satu porsi nasi bebek khas Aceh di restoran tersebut berkisar Rp 30 ribu. Bisa menjadi lebih mahal jika pelanggan menghendaki lauk tambahan.</p>
                        <p>Bu Sie Itek Bireuen Ustadz Heri berlokasi di Geuceu Kayee Jato, Kec. Banda Raya, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3 mb-4">
            <div class="col-md-6 mt-3 order-1">
                <img src="{{asset ('images/daus_nasigoreng.png')}}" alt="Daus Nasi Goreng Khas Aceh Peunayong" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Daus Nasi Goreng Khas Aceh Peunayong</h1>
                        <p>Bisnis Nasi Goreng Daus telah berlangsung secara turun-temurun sejak era 70-an dan dimulai oleh Firdaus, ayah Fachrurrazi, dari gerobak kecil. Nasi Goreng Daus mempertahankan ciri khasnya yang unik, mulai dari pemilihan bumbu, teknik memasak, hingga pemilihan beras yang semuanya berasal dari Aceh. Di sini, tersedia berbagai jenis nasi goreng seperti nasi goreng kambing muda, seafood, biasa, kampung, gurih, dan kuning. Harga makanan yang ditawarkan berkisar antara Rp 12.000 - Rp 48.000, tergantung pada jenis menu yang dipilih di Daus Nasi Goreng Khas Aceh Peunayong.</p>
                        <p>Daus Nasi Goreng Khas Aceh Peunayong berlokasi di Jl. T. Panglima Polem No.87-89, Peunayong, Kec. Kuta Alam, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
@include('layouts.footer')
@endsection