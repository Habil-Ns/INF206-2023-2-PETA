<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="{{asset ('css/css_register.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="card">
      <h1 class="card-title">Buat Akun</h1>
      <form class="card-form" action="/register" method="POST">
        <div class="card-form-group">
          <label for="username"></label>
          <input type="text" id="username" name="username" placeholder="Username">
        </div>
        <div class="card-form-group">
          <label for="Email"></label>
          <input type="text" id="Email" name="Email" placeholder="Email">
        </div>
        <div class="card-form-group">
          <label for="password"></label>
          <input type="password" id="password" name="password" placeholder="Kata Sandi">
        </div>
        <div class="card-form-group">
          <label for="repassword"></label>
          <input type="password" id="password" name="password" placeholder="Masukkan ulang Kata sandi">
        </div>
        
        <div class="card-button">
          <button type="submit">Masuk</button>
        </div>
      </form>
      <p>Sudah mempunyai akun? <a href="/login">Masuk</a></p>
    </div>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
