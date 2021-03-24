<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galeri Details | SPI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('/')}}/assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ url('/')}}/assets/css/style.css" rel="stylesheet">
    @livewireStyles
</head>
<body>

    <!-- ======= Navbar ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
          <a href="/index" class="logo d-flex align-items-center">
            <img src="{{ url('/')}}/assets/img/logo.png" alt="">
          </a>
    
          <!-- .navbar -->
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="/">Home</a></li>
              <li><a class="nav-link scrollto" href="/#layanan">Layanan</a></li>
              <li><a class="nav-link scrollto" href="/#produk">Produk</a></li>
              <li><a class="nav-link scrollto" href="/#galeri">Galeri</a></li>
              <li><a class="getstarted scrollto" href="/#konsultasi">Konsultasi</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->
    
        </div>
      </header>
    <!-- End Navbar -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-top">
          <div class="container">
          <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
              <a href="#hero" class="logo d-flex align-items-center">
                  <img src="{{ url('/')}}/assets/img/logoo.png" alt="">
              </a>
              <div class="social-links mt-3">
                  <a href="https://wa.me/6281216863435" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://www.facebook.com/sinarprimaindonesia/" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/sinarprima_indonesia/?hl=id" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              </div>
              </div>
  
              <div class="col-lg-2 col-6 footer-links">
              <h4>Fitur</h4>
              <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="/#layanan">Layanan</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="/#produk">Produk</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="/#galeri">Galeri</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="/#konsultasi">Konsultasi</a></li>
              </ul>
              </div>
  
              <div class="col-lg-2 col-6 footer-links">
              <h4>Pelayanan</h4>
              <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Pagar</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Kanopi</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Galvalum</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Railling</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Jasa Cutting</a></li>
              </ul>
              </div>
  
              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
              <h4>Konsultasi</h4>
              <p>Jl. Loncat Indah No.10, <br>
                  Tasikmadu, Kec. Lowokwaru, <br>
                  Kota Malang, Jawa Timur <br>
                  65143 <br> <br>
                  <strong>Phone:</strong> +62 812 1686 3435<br>
                  <strong>Email:</strong> SPI@gmail.com<br>
              </p>
  
              </div>
  
          </div>
          </div>
      </div>
  
      <div class="container">
          <div class="copyright">
          &copy; Copyright <strong><span>SPI</span></strong>. All Rights Reserved
          </div>
      </div>
    </footer>
  <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.script')
    @livewireScripts

</body>
</html>