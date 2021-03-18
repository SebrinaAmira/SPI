<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPI | Sinar Prima Indonesia</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('/')}}/assets/img/favicon.png" rel="icon" type="image/x-icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ url('/')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('/')}}/assets/css/style.css" rel="stylesheet">
  @livewireStyles
</head>

<body>

  <!-- ======= Navbar ======= -->
  @include('frontend.navbar')
  <!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  @include('frontend.hero')
  <!-- End Hero -->

    @yield('content')

  <!-- ======= Footer ======= -->
  @include('frontend.footer')
  <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.script')
    @livewireScripts
</body>

</html>