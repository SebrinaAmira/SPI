<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="http://127.0.0.1:8000assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="http://127.0.0.1:8000/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('/')}}/assets/css/atlantis.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="http://127.0.0.1:8000assets/css/demo.css">
</head>
<body>
	<div class="wrapper">

        @extends('layout.navbar')

		<div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
        
                <a href="index.html" class="logo">
                    <img src="http://127.0.0.1:8000assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->
        </div>

        <!-- Sidebar -->
		@extends('layout.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Pages</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Starter Page</a>
							</li>
						</ul>
					</div>
					<div class="page-category">Inner page content goes here</div>
				</div>
			</div>
            @extends('layout.footer')
		</div>

	</div>

	@extends('layout.script')

</body>
</html>