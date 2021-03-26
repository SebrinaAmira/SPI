<div>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Sinar Prima Indonesia</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">{{ $profiless->deskripsi_konten }}</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                  <div class="text-center text-lg-start">
                    <a href="#konsultasi" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Konsultasi</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ url('/')}}/assets/img/hero.svg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
      </section>
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
                                <img src="{{ url('storage/photos/' . $lyn->gambar) }}" class="img-fluid">
                                {{-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> --}}
                            </div>
                            <div class="member-info">
                                <h4>{{ $lyn->judul}}</h4>
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
                        <div class="box" style="border-radius: 20px">
                            <h3 style="color: #07d5c0;">{{ $produk->judul}}</h3>
                            <div class="price"><sup>Rp.</sup>{{ number_format($produk->harga)}}<span>,00</span></div>
                            <img src="{{ url('storage/photos/' . $produk->gambar) }}" class="img-fluid" width="200px">
                            <ul>
                                <li>{{ $produk->deskripsi}}</li>
                            </ul>
                            <a href="detail/produk/{{ $produk->id }}" class="btn-buy">Selengkapnya</a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section>
        <!-- End Produk Section -->

        <!-- ======= Galeri Section ======= -->
        <section id="galeri" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Galeri Kami</h2>
                    <p>Galeri</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        {{-- <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-pagar">Pagar</li>
                            <li data-filter=".filter-kanopi">Kanopi</li>
                            <li data-filter=".filter-galvalum">Galvalum</li>
                            <li data-filter=".filter-railling">Railling</li>
                        </ul> --}}
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($gallerys as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('storage/photos/' . $data->gambar) }}" class="img-fluid">
                            <div class="portfolio-info">
                                <h4>{{ $data->judul }}</h4>
                                <p>{{ $data->status }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('storage/photos/' . $data->gambar) }}"
                                        data-gallery="portfolioGallery" class="portfokio-lightbox"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="detail/galeri/{{ $data->id }}" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Galeri Section -->

        <!-- ======= Konsultasi Section ======= -->
        <section id="konsultasi" class="konsultasi">

            <div class="container">

                <header class="section-header">
                    <h2>Konsultasi Sekarang</h2>
                    <p>Konsultasi</p>
                </header>

                <div class="row gy-4">

                        <form wire:submit.prevent="store" class="php-konsul-form">
                            <div class="row gy-4">
                                @if (session()->has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        wire:model="nama" id="exampleFormControlInput1" placeholder="Nama" required
                                        value="{{ old('nama')}}" style="border-radius: 5px">
                                    @error('nama')
                                    <div class="text-danger">
                                        <span class="error">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 ">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                        <input type="number" min="0" class="form-control @error('telepon') is-invalid @enderror"
                                            wire:model="telepon" aria-label="Username" aria-describedby="basic-addon1"
                                            placeholder="Telepon" required value="{{ old('telepon')}}">
                                    </div>
                                    @error('telepon')
                                    <div class="text-danger">
                                        <span class="error">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('pesan') is-invalid @enderror"
                                        wire:model="pesan" id="exampleFormControlInput1" placeholder="Pesan" required
                                        value="{{ old('pesan')}}" style="border-radius: 5px">
                                    @error('pesan')
                                    <div class="text-danger">
                                        <span class="error">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control @error('alamat') is-invalid @enderror"
                                        wire:model="alamat" id="summernote" placeholder="Alamat"
                                        required rows="6" style="border-radius: 5px">{{ old('alamat')}}</textarea>
                                    @error('alamat')
                                    <div class="text-danger">
                                        <span class="error">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">Kirim</button>
                                </div>

                            </div>

                    </form>

                </div>

            </div>

</div>

</section>

<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
            <a href="#hero" class="logo d-flex align-items-center">
                <img src="{{ url('/')}}/assets/img/logoo.png" alt="">
            </a>
            <div class="social-links mt-3">
                <a href="https://wa.me/+62{{ $profiless->telepon}}" class="whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
                <a href="https://facebook.com/{{ $profiless->fb}}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/{{ $profiless->instagram}}" class="instagram" target="_blank"><i class="bi bi-instagram bx bxl-instagram"></i></a>
            </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
            <h4>Fitur</h4>
            <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="/">Beranda</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#layanan">Layanan</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#produk">Produk</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#galeri">Galeri</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#konsultasi">Konsultasi</a></li>
            </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
            <h4>Pelayanan</h4>
            <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#layanan">Pagar</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#layanan">Kanopi</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#layanan">Galvalum</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#layanan">Railling</a></li>
            </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Konsultasi</h4>
            <p>{{ $profiless->alamat}} <br> <br>
                <strong>Telepon:</strong> 0{{ $profiless->telepon}}<br>
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
