<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETA-Pemandu Wisata | Login</title>
    <!-- Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="login-page">
        <div class="image_login">
            <img src="{{asset ('images/masjidraya_login.jpg')}}" alt="Masjid Raya Baiturrahman" class="card-img">
        </div>
        <div class="login">
            <div class="content-card">
                <h1 class="card-title">Login</h1>
                <form class="card-form" action="/login" method="POST">
                    <div class="card-form-group form-email">
                        <label for="email"></label>
                        <input class="my-input" type="text" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="card-form-group form-password">
                        <label for="password"></label>
                        <input class="my-input" type="password" id="password" name="password" placeholder="Kata Sandi">
                    </div>
                    <div class="card-button">
                        <button type="submit">Masuk</button>
                    </div>
                </form>
                <div class="register">
                    <p class="text-register">Belum mempunyai akun? <a href="{{url ("peta/register")}}">Daftar</a></p>
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