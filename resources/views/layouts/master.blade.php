<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin | @yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ url('/')}}/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ url('/')}}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ url('/')}}/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ url('/')}}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ url('/')}}/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ url('/')}}/assets/css/demo.css">
    @livewireStyles
</head>
<body>

    <div class="wrapper">
		<!-- Navbar Header -->
        @include('layouts.navbar')   
	    <!-- End Navbar -->
    
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div class="mt-12">
								<h1 class="text-white pb-2 fw-bold">@yield('title')</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col">
							<div class="card full-height">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('layouts.footer')
        </div>
    </div>

    
	@include('layouts.script')
    @livewireScripts
</body>
</html>