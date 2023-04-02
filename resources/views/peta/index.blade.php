<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETA-Pemandu Wisata</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
@extends('layouts.navigation')

@section('content')
    <header class="header">
        <div class="container rows">
            <div class="content">
                <h1 class="header_content">Pariwisata Banda Aceh</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis expedita ducimus soluta quidem nesciunt. Sint, veritatis possimus tempore repellendus molestiae optio. Rerum, minima! Non, pariatur.</p>
            </div>
            <div class="image_content">
                <img src="image/Masjidraya.jpg" alt="Tempat wisata" class="image_content">
            </div>
        </div>
    </header>


    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
</body>
</html>