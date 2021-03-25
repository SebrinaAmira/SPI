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
              <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
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

  <button class="back-to-top d-flex align-items-center justify-content-center" id="to-top"><i class="bi bi-arrow-up-short"></i></button>

  @include('frontend.script')
  @livewireScripts
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() >20) {
          $('#to-top').fadeIn();
        } else {
          $('#to-top').fadeOut();
        }
      });
    });
    $('#to-top').click(function() {
      $("html, body").animate({
        scrollTop:0
      }, 1000);
      return false;
    });
  </script>

</body>
</html>