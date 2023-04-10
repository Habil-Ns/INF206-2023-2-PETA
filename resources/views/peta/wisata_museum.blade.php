@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Wisata Banda Aceh
@endsection


@section('content')
    <div class="container" id="wisata_museum">
        <div class="row">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/museum_tsunami.jpeg')}}"  alt="Museum Tsunami" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Museum Tsunami</h1>
                        <p>Indonesia pernah mengalami sebuah bencana dahsyat berupa gempa tsunami yang mengguncang Aceh pada tanggal 26 Desember 2004. Sebagai bentuk mengenang para korban dari musibah gempa dan tsunami tersebut, maka dibuat Museum Tsunami Aceh. Museum Tsunami ini menyimpan sekitar 6.038 koleksi. Koleksi tersebut dibagi ke dalam beberapa jenis, yaitu koleksi etnografika, arkelogika, biologika, teknologika, keramonologika, seni rupa, numismatika dan heraldika, geologika, filologika, serta historika dan ruang audio visual. Harga tiket untuk anak anak, pelajar, dan mahasiswa sebesar Rp3.000, Rp5.000 untuk umum dan orang dewasa, dan Rp15.000 untuk turis mancanegara/asing. Museum beroperasi setiap hari (kecuali Jumat) mulai dari pukul 09.00-16.00 WIB.</p>
                        <p>Museum Tsunami Aceh terletak di Jalan Sultan Iskandar Muda No 3, Gampongn Sukaramai, Kecamatan Baiturrahman, Banda Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-1 mt-3">
                <img src="{{asset ('images/museum_aceh.jpg')}}" alt="Museum Negeri Aceh" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Museum Aceh</h1>
                        <p>Museum Aceh di Banda Aceh merupakan tempat yang wajib dikunjungi bagi wisatawan. Berlokasi di Jalan Alauddin Mahmud Syah, museum ini menyimpan berbagai peninggalan sejarah masyarakat Aceh sejak zaman prasejarah. Di dalamnya terdapat koleksi beragam perkakas, peralatan pertanian, peralatan rumah tangga, senjata tradisional, dan pakaian tradisional. Selain itu, museum ini juga menyimpan manuskrip kuno, dokumentasi foto sejarah, serta maket perkembangan Masjid Agung Baiturrahman. Museum Aceh buka setiap hari kecuali hari libur nasional dengan jam operasional dari pukul 8:30 - 12:00 WIB dan 14:00 - 16:15 WIB. Biaya tiket masuk bervariasi, yaitu Rp. 5.000 untuk tamu asing, Rp. 2.000 untuk anak-anak dan rombongan dewasa, Rp. 3.000 untuk dewasa, dan Rp. 1.000 untuk rombongan anak-anak.</p>
                        <p>Museum Aceh terletak di Jl. Sultan Mahmudsyah No.10, Peuniti, Kec. Baiturrahman, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/pltd_apung.jpg')}}"  alt="Museum PLTD Apung" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Museum PLTD Apung</h1>
                        <p>Kapal PLTD Apung merupakan kapal generator listrik yang dimiliki oleh PLN di Banda Aceh dan kini dijadikan tempat wisata yang terkenal dengan sebutan "Kapal Apung". Kapal ini memiliki panjang 63 meter dan mampu menghasilkan daya sebesar 10,5 megawatt. Kapal ini memiliki luas mencapai 1.900 meter persegi dan berbobot sekitar 2.600 ton, dan tidak terbayangkan bisa sampai ke pusat Kota Banda Aceh. Ketika tsunami terjadi pada 26 Desember 2004, kapal ini terseret oleh gelombang pasang setinggi 9 meter, dan bergeser hingga mencapai jantung Kota Banda Aceh sejauh 5 kilometer, terhempas ke tengah pemukiman warga tidak jauh dari Museum Tsunami. Kapal Apung buka setiap hari dari pukul 9:00 - 12:00 WIB dan kembali buka pada pukul 14:00 - 17:30 WIB. Selain foto-foto peristiwa tsunami di Aceh, di dalam museum ini kita juga bisa belajar tentang bencana tsunami. Tidak ada biaya masuk yang dikenakan, tetapi tersedia kotak sumbangan untuk pemeliharaan monumen. Biaya parkir kendaraan mobil Rp. 5000 dan motor Rp. 3000.</p>
                        <p>Museum PLTD Apung terletak di Punge Blang Cut, Kec. Jaya Baru, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center my-3">
            <div class="col-md-6 order-1 mt-3 ">
                <img src="{{asset ('images/museum_rumah_cutnyakdhien.jpg')}}" alt="Museum Rumah Cut Nyak Dhien" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Museum Rumah Cut Nyak Dhien</h1>
                        <p>Rumah Cut Nyak Dhien merupakan rumah panggung khas Aceh yang beratap rumbia dan disangga oleh 65 tiang kayu ulin, atau dalam bahasa Aceh disebut kayu semantok. Kayu ulin yang dipakai pun merupakan kayu ulin merah yang berkualitas tinggi. Kokohnya bangunan ini teruji saat Aceh diguncang gempa dan diterjang tsunami pada tahun 2004. Tidak ada bagian bangunan yang rusak pada saat itu, bahkan rumah tersebut menjadi tempat perlindungan bagi masyarakat sekitar. Di ruangan ini berjajar foto-foto perjuangan rakyat Aceh. Jika diperhatikan dengan saksama, pada salah satu foto terdapat wajah asli Cut Nyak Dhien saat berada di pengasingan di Sumedang, Jawa Barat. Rumah Cut Nyak Dhien dibuka setiap hari Senin sampai dengan Minggu, mulai pukul 9:00 - 17:00 WIB.</p>
                        <p>Museum Rumah Cut Nyak Dhien terletak di Lampisang, Kec. Peukan Bada, Kabupaten Aceh Besar, Provinsi Aceh.</P>
                    </div>
                </div>
            </div>
        </div>
@endsection