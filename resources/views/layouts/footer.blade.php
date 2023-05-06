<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
                        <p class="footer_tujuan-text" style="color: #515151;">
                            Tujuan kami adalah memfasilitasi para wisatawan dalam mencari pemandu wisata di Banda Aceh
                            dan membuka kesempatan kerja bagi mereka yang ingin menjadi pemandu wisata.
                        </p>
                    </div>
                    <div class="col-sm-7" id="services">
                        <div class="services-peta row">
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="pemandu-footer">
                                    <a href="{{ url('peta/pemanduwisata') }}" class="footer-service-text">Pemandu
                                        Wisata</a>
                                </h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="pendaftaran-footer">
                                    <a href="{{ url('peta/pemanduwisata/pendaftaran') }}"
                                        class="footer-service-text">Pendaftaran Pemandu</a>
                                </h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="hubungi-footer">
                                    <a href="{{ url('peta/hubungikami') }}" class="footer-service-text ms-3">Hubungi</a>
                                </h6>
                            </div>
                        </div>
                        <div class="footer-icons ms-5">
                            <a href="https://github.com/Habil-Ns/INF206-2023-2-PETA.git" target="_blank" class="footer-social">
                                <i class='bx bxl-github'></i>
                            </a>
                            <a href="https://wa.me/6282267856747" target="_blank" class="footer-social">
                                <i class='bx bxl-whatsapp'></i>
                            </a>
                            <a href="https://instagram.com/pkmkc2023.peta?igshid=NTc4MTIwNjQ2YQ==" class="footer-social" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright text-center pb-3">
                        Copyright © 2023 PETA-Pemandu Wisata
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>