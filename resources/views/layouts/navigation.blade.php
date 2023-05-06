<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.css') }}">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
                        <a href="{{ url('peta') }}" class="nav_link active">Beranda</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{ url('peta/sejarah') }}" class="nav_link">Sejarah</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Galeri</a>
                        <ul class="submenu submenugaleri">
                            <li><a href="{{ url('peta/galeri/hotel') }}">Hotel</a></li>
                            <li><a href="{{ url('peta/galeri/petabandaaceh') }}">Peta Banda Aceh</a></li>
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
                            <li><a href="{{ url('peta/pemanduwisata/pendaftaran') }}">Pendaftaran</a></li>
                            <li><a href="{{ url('peta/pemanduwisata') }}">Daftar Pemandu</a></li>
                        </ul>
                    </li>
                    <li class="nav_item">
                        <a href="{{ url('peta/hubungikami') }}" class="nav_link">Hubungi Kami</a>
                    </li>
                    @auth
                    <li class="nav_item dropdown">
                        <a class="nav-user dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, {{ auth()->user()->username }}</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end p-0" aria-labelledby="navbarDropdown" id="dropdown-width" style="transform: translate3d(-12px, 29px, 0px);">
                            <li><a class="link-dashboard" href="/dashboard" id="nav-dashboard">Dashboard</a></li>
                            <li><hr class="dropdown-divider" id="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item" id="nav-keluar">Keluar</button>
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
                        <ul class="submenu submenupengguna" id="submenu-user">
                            <li><a href="{{ url('peta/login') }}" id="masuk-admin">Masuk Sebagai Admin</a></li>
                            <li><a href="{{ url('peta/login') }}" id="masuk-pemandu">Masuk Sebagai Pemandu Wisata</a></li>
                        </ul>
                        @endauth
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
    <!-- JS 2 -->
    <script src="{{ asset('js/biodata_wisatawan.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
</body>

</html>
