@extends('layouts.navigation')


@section('title')
    PETA-Pemandu Wisata | Wisata Banda Aceh
@endsection


@section('content')
    <div class="container margin-wisata" id="wisata_sejarah_budaya">
        <div class="row">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/Kerkhof.jpg')}}"  alt="Kerkhof Peucut" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Kerkhof Peucut</h1>
                        <p>Kerkhof Peucut merupakan sebuah pemakaman di Banda Aceh yang memiliki luas sekitar 3,5 hektar. Mayoritas kuburan yang berada di pemakaman ini merupakan milik dari tentara Belanda yang tewas ketika berperang melawan rakyat Aceh. Nama Kerkhof Peucut sendiri berasal dari gabungan bahasa Belanda “Kerkhof” yang berarti halaman gereja atau kuburan. Sedangkan “Pocut” merupakan bahasa Aceh yang bisa diartikan anak kesayangan. Makam Kerkhoff tidak saja bukti nyata kepahlawanan rakyat Aceh melawan penjajah tetapi juga merupakan bukti nyata keadilan Sultan Iskandar Muda dalam menjunjung tinggi hukum di masa pemerintahannya.</p>
                        <p>Kerkhof Peucut terletak di Sukaramai, Kec. Baiturrahman, Kota Banda Aceh, Provinsi Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-1 mt-3">
                <img src="{{asset ('images/makam_sultan_iskandarmuda.jpg')}}" alt="Makam Sultan Aceh XIV Iskandar Muda" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Makam Sultan Aceh XIV Iskandar Muda</h1>
                        <p>Sultan Iskandar Muda memerintah Kerajaan Aceh Darussalam pada tahun 1607-1636, dan membawanya pada puncak kejayaan. Pada abad ke-17 itu, Kerajaan Aceh berada di peringkat terbesar kelima di antara kerajaan-kerajaan Islam di dunia. Banda Aceh ketika itu telah menjadi bandar perniagaan internasional, disinggahi kapal-kapal asing yang mengangkut hasil bumi dari kawasan Asia ke benua Eropa.</p>
                        <p>Makam Sultan Iskandar Muda Banda Aceh terletak di Kelurahan Peniti, Kec. Baiturrahman Kota Banda Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/tamansari_gunongan.png')}}"  alt="Taman Sari Gunongan" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Taman Sari Gunongan</h1>
                        <p>Taman Sari Gunongan merupakan objek wisata sejarah yang menyimpan kisah percintaan. Jika berkunjung ke India anda bisa melihat Taj Mahal, maka di Aceh terdapat taman sari ini. Taman ini merupakan suatu bangunan peninggalan kerajaan Aceh yang dibangu oleh Sultan Iskandar Muda untuk menunjukkan rasa cintanya kepada Putri Phang dari Pahang Malaysia. Taman Sari Gunongan dibangun antara tahun 1607 dan 1636 pada masa pemerintahan Iskandar Muda.</p>
                        <p>Taman Sari Gunongan terletak di Sukaramai, Kec. Baiturrahman, Kota Banda Aceh, Provinsi Aceh</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3">
            <div class="col-md-6 order-1 mt-3 ">
                <img src="{{asset ('images/makam_syiahkuala.jpeg')}}" alt="Makam Syiah Kuala" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-2 d-flex justify-content-end">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Makam Syiah Kuala</h1>
                        <p>Makam Syiah Kuala merupakan makam dari seorang ulama kharismatik di Aceh dan cukup ahli dalam bidang hukum. Syiah Kuala bukan nama asli beliau, karena tinggal di kampung kuala diberilah julukan Syiah Kuala, nama asli beliau Tengku Haji Syekh Abdurauf bin Ali Alfansury As Singkili. Beliau  lahir di Singkil maka ada kata singkili yang bermaksud lahir di Singkil, namun berdarah Yaman. kecintaannya terhadap ilmu dan pendidikan lah membuatnya mengelola beberapa dayah di Aceh, tak heran namanya pun disematkan pada salah satu universitas terkemuka di Aceh yaitu Univeritas Syiah Kuala.</p>
                        <p>Makam Syiah Kuala terletak di Gampong Deah Raya, Kec. Syiah Kuala, Kota Banda Aceh.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-3 mb-4">
            <div class="col-md-6 order-2 mt-3 d-flex justify-content-end">
                <img src="{{asset ('images/kapal_apunglampulo.jpg')}}"  alt="Kapal Apung Lampulo" srcset="" class="img-fluid" width="458px" height="329px">
            </div>
            <div class="col-md-6 order-1">
                <div class="justify-content-center text-center">
                    <div class="blurb">
                        <h1>Kapal Apung Lampulo</h1>
                        <p>Kapal Apung Lampulo merupakan kapal yang dihempas oleh gelombang tsunami pada tanggal 26 Desember 2004 hingga tersangkut di rumah ini. Kapal ini menjadi bukti penting betapa dahsyatnya musibah tsunami tersebut. Berkat kapal ini 59 orang terselamatkan pada kejadian itu. Kapal Apung Lampulo berbahan kontruksi dari kayu tersebut memiliki berat 65 ton, dengan panjang 25 meter, dan memiliki lebar 5,5 meter. Para pengunjung tidak dipungut biaya untuk masuk ke lokasi objek wisata Kapal Apung Lampulo.</p>
                        <p>Kapal Apung Lampulo terletak di Desa Lampulo, Kec. Kuta Alam, Banda Aceh.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
@include('layouts.footer')
@endsection