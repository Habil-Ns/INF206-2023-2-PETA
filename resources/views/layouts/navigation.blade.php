<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                        <a href="#" class="nav_link active-link">Beranda</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Sejarah</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Galeri</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Wisata Banda Aceh</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Pemandu Wisata</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Hubungi Kami</a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">
                            <img src="{{ asset('images/user.png') }}" alt="User" width=56px height=56px>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')
    </header>
    <script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>


