@section('title', 'Dashboard')
<div class="row">
    <div class="col-xxl-4 col-xl-12 mb-4">
        <div class="card h-100">
            <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-xxl-12">
                        <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                            <h1 class="text-primary">Selamat Datang, Admin!</h1>
                            <p class="text-gray-700 mb-0">It&apos;s time to get started! View new
                                opportunities now, or continue on your previous work.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                            src="{{ url('/')}}/assets/img/features.png" style="max-width: 12rem;" />
                    </div>
                </div>
            </div>
        </div>
    </div>                   
</div>

<!-- Example Colored Cards for Dashboard Demo-->
<div class="row">
    <div class="col-md-6">
        <div class="card card-dark bg-primary-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">{{ $lynan }}</div>
                <h2 class="mb-2">Layanan</h2>
                <p><a href="/layanan" class="small stretched-link" style="color: #fff;">Selengkapnya</a></p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="layanan" data-toggle="produk" href="/layanan" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-dark bg-secondary-gradient">
            <div class="card-body pb-0" id="produk" href="/produk">
                <div class="h1 fw-bold float-right">{{ $produks }}</div>
                <h2 class="mb-2">Produk</h2>
                <p><a href="/produk" class="small stretched-link" style="color: #fff;">Selengkapnya</a></p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="produk" data-toggle="produk" href="/produk" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-dark bg-secondary-gradient">
            <div class="card-body pb-0" id="produk" href="/produk">
                <div class="h1 fw-bold float-right">{{ $gallerys }}</div>
                <h2 class="mb-2">Galeri</h2>
                <p><a href="/galeri" class="small stretched-link" style="color: #fff;">Selengkapnya</a></p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="produk" data-toggle="produk" href="/produk" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-dark bg-primary-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">{{ $knsultasi }}</div>
                <h2 class="mb-2">Konsultasi</h2>
                <p><a href="/konsultasi" class="small stretched-link" style="color: #fff;">Selengkapnya</a></p>
                <div class="card-footer d-flex align-items-center justify-content-between" aria-disabled="true">
                    <a class="nav-link" id="produk" data-toggle="produk" href="/produk" role="tab" aria-selected="true"></a>
                </div>
            </div>
        </div>
    </div>
</div>