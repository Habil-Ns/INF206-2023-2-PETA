<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETA-Pemandu Wisata | Registrasi</title>
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="registrasi-page">
        <div class="image_login">
            <img src="{{asset ('images/masjidraya_login.jpg')}}" alt="Masjid Raya Baiturrahman" class="card-img">
        </div>
        <div class="registrasi">
            <div class="content-card">
                <h1 class="card-title">Buat Akun</h1>
                <form class="card-form" action="/peta/register" method="POST">
                    @csrf
                    <div class="card-form-group">
                        <label for="username"></label>
                        <input class="my-input" type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="card-form-group">
                        <label for="email"></label>
                        <input class="my-input" type="text" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="card-form-group">
                        <label for="password"></label>
                        <input class="my-input" type="password" id="password" name="password" placeholder="Kata Sandi">
                    </div>
                    <div class="card-button">
                        <button type="submit">Daftar</button>
                    </div>
                </form>
                <div class="register">
                    <p class="text-register">Sudah mempunyai akun? <a href="{{url ("peta/login")}}">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>