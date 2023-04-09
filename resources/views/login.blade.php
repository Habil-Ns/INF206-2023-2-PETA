<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{asset ('css/css_login.css')}}">
  </head>
  <img src= "{{asset ('image/RPL2.jpg')}}" alt="Gambar" class="card-img" width="1000" height="550">

  <body>
   
   
    <div class="card">
      <h1 class="card-title">Login</h1>
      <form class="card-form" action="/login" method="POST">
        <div class="card-form-group">
          <label for="email"></label>
          <input type="text" id="email" name="email" placeholder="Email">
        </div>
        <div class="card-form-group">
          <label for="password"></label>
          <input type="password" id="password" name="password" placeholder="Kata Sandi">
        </div>
        <div class="card-button">
          <button type="submit">Masuk</button>
        </div>
      </form>
      <p>Belum punya akun? <a href="/register">Daftar</a></p>
    </div>
    
  </body>
</html>
