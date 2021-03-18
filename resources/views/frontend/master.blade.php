<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPI | Sinar Prima Indonesia</title>
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

  <main id="main">

    <!-- ======= Layanan Section ======= -->
    <section id="layanan" class="layanan">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Layanan Prima</h2>
          <p>Layanan</p>
        </header>

        <div class="row gy-4">

          @foreach($lynan as $lyn)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ url('storage/photos/' . $lyn->gambar) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{ $lyn->judul}}</h4>
                <span>Product Manager</span>
                <p>{{ $lyn->deskripsi}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>

    </section>
    <!-- End Layanan Section -->

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Produk kami</h2>
          <p style="color: #fff;">Produk</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          @foreach($produks as $produk)
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">{{ $produk->judul}}</h3>
              <div class="price"><sup>Rp.</sup>{{ $produk->harga}}<span>,00</span></div>
              <img src="{{ url('storage/photos/' . $produk->gambar) }}" class="img-fluid" alt="">
              <ul>
                <li>{{ $produk->deskripsi}}</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
          @endforeach

        </div>

      </div>

    </section>
    <!-- End Produk Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="galeri" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>galeri kami</h2>
          <p>Galeri</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($gallerys as $data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ url('storage/photos/' . $data->gambar) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $data->judul }}</h4>
                <p>{{ $data->status }}</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                    class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Konsultasi Section ======= -->
    <section id="konsultasi" class="konsultasi">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Konsultasi Sekarang</h2>
          <p>Konsultasi</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Buka</h3>
                  <p>Senin - Sabtu<br>8:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form wire:submit.prevent="store" class="php-konsul-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" id="exampleFormControlInput1" placeholder="Nama" required value="{{ old('nama')}}">
                        @error('nama')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                </div>

                <div class="col-md-6 ">
                  <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">+62</span>
                    <input type="text" class="form-control  @error('telepon') is-invalid @enderror" wire:model="telepon" aria-label="Username" aria-describedby="basic-addon1" placeholder="Telepon" required value="{{ old('telepon')}}">
                </div>
                @error('telepon')
                <div class="text-danger">
                    <span class="error">{{ $message }}</span>
                </div>
                @enderror
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control @error('pesan') is-invalid @enderror" wire:model="pesan" id="exampleFormControlInput1" placeholder="Pesan" required value="{{ old('pesan')}}">
                        @error('pesan')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                </div>

                <div class="col-md-12">
                  <textarea class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat" id="exampleFormControlTextarea1" placeholder="Alamat" required rows="5">{{ old('alamat')}}</textarea>
                @error('alamat')
                <div class="text-danger">
                    <span class="error">{{ $message }}</span>
                </div>
                @enderror
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section>
    <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.script')
    @livewireScripts
</body>

</html>