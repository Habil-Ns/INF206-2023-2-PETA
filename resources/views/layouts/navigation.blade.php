<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.css') }}">
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- BootStrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<body>
    <header class="head" id="header">
        <nav class="container rows navigation">
            <div class="nav_brand">
                    <span>PETA</span>-Pemandu Wisata
            </div>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="{{url ("peta")}}" class="nav_link active-link">Beranda</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{url ("peta/sejarah")}}" class="nav_link">Sejarah</a>
                        <a href="#" class="nav_link">Sejarah</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Galeri</a>
                        <ul class="submenu submenugaleri">
                            <li><a href="{{url ("peta/galeri/hotel")}}">Hotel</a></li>
                            <li><a href="{{url ("peta/galeri/petabandaaceh")}}">Peta Banda Aceh</a></li>
                            <li><a href="#">Peta Banda Aceh</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Wisata Banda Aceh</a>
                        <ul class="submenu submenuwisata">
                            <li><a href="{{url ("peta/wisata/wisatamuseum")}}">Wisata Museum</a></li>
                            <li><a href="{{url ("peta/wisata/wisatasejarahbudaya")}}">Wisata Sejarah dan Budaya</a></li>
                            <li><a href="{{url ("peta/wisata/wisatareligi")}}">Wisata Religi</a></li>
                            <li><a href="{{url ("peta/wisata/wisatakuliner")}}">Wisata Kuliner</a></li>
                            <li><a href="{{url ("peta/wisata/wisataalam")}}">Wisata Alam</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Pemandu Wisata</a>
                        <ul class="submenu submenupemandu">
                            <li><a href="{{url ("peta/pemanduwisata/pendaftaran")}}">Pendaftaran</a></li>
                            <li><a href="#">Pendaftaran</a></li>
                            <li><a href="{{url ("peta/pemanduwisata")}}">Daftar Pemandu</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="{{url ("peta/hubungikami")}}" class="nav_link">Hubungi Kami</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">
                            <img class="img_pengguna" src="{{ asset('images/user.png') }}" alt="User" width=56px height=56px>
                        </a>
                        <ul class="submenu submenupengguna" >
                            <li><a href="#">Masuk Sebagai Admin</a></li>
                            <li><a href="{{url ("peta/login")}}">Masuk Sebagai Pemandu Wisata</a></li>
                        </ul>
                        <!-- <a href="#" class="nav_link" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <li><a href="#">Masuk Sebagai Pemandu Wisata</a></li>
                        </ul>
                        <a href="#" class="nav_link" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('images/profile_pemandu.jpg') }}" alt="User" width=56px height=56px>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <button class="dropdown-item" href="#">Profil</button>
                            <button class="dropdown-item" href="#">
                                Notifikasi <span class="badge badge-light">1</span>
                                <span class="sr-only">unread messages</span>
                            </button>
                            <div class="dropdown-divider"></div>
                                <button class="dropdown-item" href="#">Keluar</button>
                         </div> -->
                         </div>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')
    </header>
    <!-- Swiper JS -->
    <script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>
    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <!-- JQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap"
    async defer></script>
</body>
</html>