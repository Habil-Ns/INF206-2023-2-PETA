<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
                        <a href="peta.hubungikami" class="nav_link">Hubungi Kami</a>
                    </li>
                    <li class="nav_item">
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
                          </div>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')
    </header>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>


