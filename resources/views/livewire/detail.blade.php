<div>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="/index">Home</a></li>
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
                    <li><strong>Category</strong>: Web design</li>
                    <li><strong>Status</strong>: {{ $data->status}}</li>
                    <li><strong>Created By</strong>: {{ $data->created_by}}</li>
                    <li><strong>Updated By</strong>: {{ $data->updated_by}}</li>
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
