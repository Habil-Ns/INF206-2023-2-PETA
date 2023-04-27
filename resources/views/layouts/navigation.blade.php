<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Swiper CSS -->
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.css') }}">
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
=======
>>>>>>> 2108107010089-HabilNs
    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.css') }}">
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

<body>
    <header class="head" id="header">
        <nav class="container rows navigation">
            <div class="nav_brand">
                <span>PETA</span>-Pemandu Wisata
            </div>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="{{ url('peta') }}" class="nav_link active-link">Beranda</a>
                    </li>
                    <li class="nav_item">
<<<<<<< HEAD
                        <a href="{{url ("peta/sejarah")}}" class="nav_link">Sejarah</a>
                        <a href="#" class="nav_link">Sejarah</a>
=======
                        <a href="{{ url('peta/sejarah') }}" class="nav_link">Sejarah</a>
>>>>>>> 2108107010089-HabilNs
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Galeri</a>
                        <ul class="submenu submenugaleri">
<<<<<<< HEAD
                            <li><a href="{{url ("peta/galeri/hotel")}}">Hotel</a></li>
                            <li><a href="{{url ("peta/galeri/petabandaaceh")}}">Peta Banda Aceh</a></li>
                            <li><a href="#">Peta Banda Aceh</a></li>
=======
                            <li><a href="{{ url('peta/galeri/hotel') }}">Hotel</a></li>
                            <li><a href="{{ url('peta/galeri/petabandaaceh') }}">Peta Banda Aceh</a></li>
>>>>>>> 2108107010089-HabilNs
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Wisata Banda Aceh</a>
                        <ul class="submenu submenuwisata">
                            <li><a href="{{ url('peta/wisata/wisatamuseum') }}">Wisata Museum</a></li>
                            <li><a href="{{ url('peta/wisata/wisatasejarahbudaya') }}">Wisata Sejarah dan Budaya</a>
                            </li>
                            <li><a href="{{ url('peta/wisata/wisatareligi') }}">Wisata Religi</a></li>
                            <li><a href="{{ url('peta/wisata/wisatakuliner') }}">Wisata Kuliner</a></li>
                            <li><a href="{{ url('peta/wisata/wisataalam') }}">Wisata Alam</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Pemandu Wisata</a>
                        <ul class="submenu submenupemandu">
<<<<<<< HEAD
                            <li><a href="{{url ("peta/pemanduwisata/pendaftaran")}}">Pendaftaran</a></li>
                            <li><a href="#">Pendaftaran</a></li>
                            <li><a href="{{url ("peta/pemanduwisata")}}">Daftar Pemandu</a></li>
=======
                            <li><a href="{{ url('peta/pemanduwisata/pendaftaran') }}">Pendaftaran</a></li>
                            <li><a href="{{ url('peta/pemanduwisata') }}">Daftar Pemandu</a></li>
>>>>>>> 2108107010089-HabilNs
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="{{ url('peta/hubungikami') }}" class="nav_link">Hubungi Kami</a>
                    </li>
                    @auth
                    <li class="nav_item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-top: 20px; padding-bottom: 20px;">
                    Hi, {{ auth()->user()->username }}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav_item">
                        <a href="#" class="nav_link">
                            <img class="img_pengguna" src="{{ asset('images/user.png') }}" alt="User" width=56px
                                height=56px>
                        </a>
<<<<<<< HEAD
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
=======
                        <ul class="submenu submenupengguna">
                            <li><a href="{{ url('peta/login') }}">Masuk Sebagai Admin</a></li>
                            <li><a href="{{ url('peta/login') }}">Masuk Sebagai Pemandu Wisata</a></li>
                        </ul>
                        @endauth
>>>>>>> 2108107010089-HabilNs
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
<<<<<<< HEAD
     <!-- JQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap"
    async defer></script>
=======
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
>>>>>>> 2108107010089-HabilNs
</body>

</html>
