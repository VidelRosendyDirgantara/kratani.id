<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kratani.id</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />

    <!-- Favicons -->
    <!-- <link href="{{url('assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/styleswiper.css" />

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="assets/css/styleswiper.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Kratani.id</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href={{ route('index') }}>Home</a></li>
                    <li><a class="nav-link scrollto" href="/sayur">Sayur</a></li>
                    <li><a class="nav-link scrollto" href="#">Kelompok Tani</a></li>
                    <!-- <li><a class="nav-link scrollto " href="#">Daging</a></li> -->
                    <li><a class="nav-link scrollto" href="#">Krahat</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#">Olah Tani</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Kratani.id</h1>
                    <a href="" class="btn-register">Daftar</a>
                    <a href="" class="btn-sign-in">Masuk</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section align="center" id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <!-- <div class="content col-xl-5 d-flex align-items-stretch"> -->
                        <div class="content" >
                            <h4 align="center">Kratani.id</h4>
                            <p><h5>
                                Kratani.id Adalah platform online on demand services
                                Untuk memudahkan aktivitas berbelanja anda diselah selah waktu
                                kerja, tanpa mengharuskan anda pergi secara langsung ke pasar/supermarket.
                            </h5></p>
                        </div>
                    <!-- </div> -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider ml-lg-5 ml-md-5 mt-5 py-lg-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="imgContainer ml-lg-n5 mt-lg-0 mt-md-0 ml-md-n5 mt-n5">
                                                <div class="image">
                                                    <img src="assets/img/sayur/brokoli.png" />
                                                </div>
                                                <div class="image">
                                                    <img src="assets/img/sayur/kubis.jpg" />
                                                </div>
                                                <div class="image">
                                                    <img src="assets/img/sayur/wortel.png" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- slider -->
                                            <div id="productSlider"
                                                class="carousel slide carousel-fade pr-lg-5 py-lg-0 py-4"
                                                data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="content">
                                                            <div class="title">
                                                                <h1>Brokoli</h1>
                                                            </div>
                                                            <div class="desc">
                                                                <h3>Rp. 16,000</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="content">
                                                            <div class="title">
                                                                <h1>Kubis</h1>
                                                            </div>
                                                            <div class="desc">
                                                                <h1>Rp. 2,500</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="content">
                                                            <div class="title">
                                                                <h1>Wortel</h1>
                                                            </div>
                                                            <div class="desc">
                                                                <h1>Rp. 3,000</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- indicators -->
                                                <ol class="carousel-indicators indicators">
                                                    <li data-target="#productSlider" data-slide-to="0" class="active">
                                                    </li>
                                                    <li data-target="#productSlider" data-slide-to="1"></li>
                                                    <li data-target="#productSlider" data-slide-to="2"></li>
                                                </ol>
                                                <!-- indicators -->
                                            </div>
                                            <!-- slider -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
                        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                        crossorigin="anonymous"></script>
                    <script
                        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
                        integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04="
                        crossorigin="anonymous"></script>
                    <script src="./js/script.js"></script>
                </div>
            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Kratani.id</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">Kratani.id</a>
                </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{url('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>



    <!-- <script src="assets/js/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>