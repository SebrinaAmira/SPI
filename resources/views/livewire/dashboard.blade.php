@section('title', 'Dashboard')
<div class="row">
    <div class="col-xxl-4 col-xl-12 mb-4">
        <div class="card h-100">
            <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-xxl-12">
                        <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                            <h1 class="text-primary">Selamat Datang, Admin!</h1>
                        </div>
                    </div>
                    <div class="col-xl-1 col-xxl-12 text-center"><img class="img-fluid"
                            src="{{ url('/')}}/assets/img/features.png" style="max-width: 10rem;" />
                    </div>
                </div>
            </div>
        </div>
    </div>                   
</div>

<!-- Example Colored Cards for Dashboard Demo-->
<div class="row">
    <a href="/layanan" style="color: #fff"><div class="col-md-6">
        <div class="card card-dark bg-primary-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">{{ $lynan }}</div>
                <h2 class="mb-2">Layanan</h2>
                <p>Selengkapnya</p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="layanan" data-toggle="layanan" href="/layanan" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div></a>
    <a href="/produk" style="color: #fff"><div class="col-md-6">
        <div class="card card-dark bg-secondary-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">{{ $produks }}</div>
                <h2 class="mb-2">Produk</h2>
                <p>Selengkapnya</p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="produk" data-toggle="produk" href="/produk" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div></a>
    <a href="/galeri" style="color: #fff"><div class="col-md-6">
        <div class="card card-dark bg-secondary-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">{{ $gallerys }}</div>
                <h2 class="mb-2">Galeri</h2>
                <p>Selengkapnya</p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="galeri" data-toggle="galeri" href="/galeri" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div></a>
    <a href="/konsultasi" style="color: #fff"><div class="col-md-6">
        <div class="card card-dark bg-primary-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">{{ $knsultasi }}</div>
                <h2 class="mb-2">Konsultasi</h2>
                <p>Selengkapnya</p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="konsultasi" data-toggle="konsultasi" href="/konsultasi" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div></a>
</div>