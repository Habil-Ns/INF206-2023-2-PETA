<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Patua One' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <!-- Footer -->
    <footer class="footer-peta">
        <section class="footer_section" id="footer">
            <div class="container">
                <div class="footer-content row pt-4">
                    <div class="col-sm-5">
                        <h6 class="">
                            <a href="{{ url('peta') }}" class="footer-text">PETA-Pemandu Wisata</a>
                        </h6>
                        <p style="color: #515151; font-family: 'Source Serif Pro';">
                            Tujuan kami adalah memfasilitasi para wisatawan dalam mencari pemandu wisata di Banda Aceh
                            dan membuka kesempatan kerja bagi mereka yang ingin menjadi pemandu wisata.
                        </p>
                    </div>
                    <div class="col-sm-7" id="services">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <h6 class="pemandu-footer">
                                    <a href="{{ url('peta/pemanduwisata') }}" class="footer-text">Pemandu Wisata</a>
                                </h6>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <h6 class="pendaftaran-footer">
                                    <a href="{{ url('peta/pemanduwisata/pendaftaran') }}" class="footer-text">Pendaftaran Pemandu</a>
                                </h6>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <h6 class="hubungi-footer">
                                    <a href="{{ url('peta/hubungikami') }}" class="footer-text">Hubungi</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="copyright text-center pb-3" style="font-family: 'Source Serif Pro';">
                        Copyright © 2023 PETA-Pemandu Wisata
                    </div>
                </div>
        </section>
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>