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
            @foreach ($gallerys as $data)
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                  <div class="swiper-wrapper align-items-center">
    
                    <div class="swiper-slide">
                      <img src="{{ url('storage/photos/' . $data->gambar) }}" class="img-fluid" alt="">
                    </div>
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>{{ $data->judul }}</h3>
                  <ul>
                    <li><strong>Pelayanan</strong>: {{ $data->layanan}}</li>
                    <li><strong>Klien</strong>: {{ $data->klien}}</li>
                    <li><strong>Project Tanggal</strong>: {{$data->tanggal}}</li>
                    <li><strong>Project URL</strong>: <a href="https://www.facebook.com/sinarprimaindonesia/">Sinar Prima Indonesia</a></li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>Detail Deskripsi Produk</h2>
                  <p>
                    {{ $data->deskripsi }}
                  </p>
                </div>
              </div>
            @endforeach
            </div>
    
          </div>
        </section>
        <!-- End Galeri Details Section -->
    
      </main>
</div>
