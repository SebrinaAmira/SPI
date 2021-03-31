<div>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="/">Beranda</a></li>
              <li>Galeri Details</li>
            </ol>
            <h2>Galeri Details</h2>
    
          </div>
        </section>
        <!-- End Breadcrumbs -->
    
        <!-- ======= Galeri Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                  <div class="swiper-wrapper align-items-center">
                      <img src="{{ url('storage/photos/' . $data->gambar) }}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>{{ $data->judul }}</h3>
                  <ul>
                    <li><strong>Pelayanan</strong>: {{ $data->layanan}}</li>
                    <li><strong>Project Tanggal</strong>: {{$data->tanggal}}</li>
                    <li><strong>Link Facebook</strong>: <a href="https://facebook.com/{{ $profiless->fb}}">Sinar Prima Indonesia</a></li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>Detail Deskripsi</h2>
                  <p>
                    {{ $data->deskripsi }}
                  </p>
                </div>
              </div>
            </div>
    
          </div>
        </section>
        <!-- End Galeri Details Section -->

        <footer id="footer" class="footer">
          <div class="footer-top">
              <div class="container">
              <div class="row gy-4">
                  <div class="col-lg-5 col-md-12 footer-info">
                  <a href="/" class="logo d-flex align-items-center">
                      <img src="{{ url('/')}}/assets/img/logoo.png" alt="">
                  </a>
                  <div class="social-links mt-3">
                    <a href="https://wa.me/+62{{ $profiless->telepon}}" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://facebook.com/{{ $profiless->fb}}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/{{ $profiless->instagram}}" class="instagram" target="_blank"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                </div>
                  </div>
      
                  <div class="col-lg-2 col-6 footer-links">
                  <h4>Fitur</h4>
                  <ul>
                      <li><i class="bi bi-chevron-right"></i> <a href="/">Beranda</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="/#layanan">Layanan</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="/#produk">Produk</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="/#galeri">Galeri</a></li>
                      <li><i class="bi bi-chevron-right"></i> <a href="/#konsultasi">Konsultasi</a></li>
                  </ul>
                  </div>
      
                  <div class="col-lg-2 col-6 footer-links">
                    <a href="/#layanan"><h4>Pelayanan</h4></a>
                  <ul>
                    <li style="color: #fff"><i class="bi bi-chevron-right"></i>Pagar</li>
                    <li style="color: #fff"><i class="bi bi-chevron-right"></i>Kanopi</li>
                    <li style="color: #fff"><i class="bi bi-chevron-right"></i>Galvalum</li>
                    <li style="color: #fff"><i class="bi bi-chevron-right"></i>Railling</li>
                  </ul>
                  </div>
      
                  <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4>Konsultasi</h4>
                  <p>{{ $profiless->alamat}} <br> <br>
                    <strong>Telepon:</strong><a href="https://wa.me/+62{{ $profiless->telepon}}" style="color:#fff" class="whatsapp" target="_blank"> 0{{ $profiless->telepon}}</a><br>
                      {{-- <strong>Email:</strong> <br> --}}
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
    
      </main>
</div>
