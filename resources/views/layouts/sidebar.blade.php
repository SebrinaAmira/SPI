	<!-- Sidebar -->
    <div class="sidebar sidebar-style-2">			
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{ url('/')}}/assets/img/favicon.png" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ Auth::user()->name}}
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="/profil">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/profil">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : ''}}">
							<a href="/dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Fitur</h4>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item {{ Request::segment(1) == 'profil' ? 'active' : ''}}">
							<a href="/profil">
								<i class="fas fa-pen-square"></i>
								<p>Profile</p>
							</a>
						</li>
                        <li class="nav-item {{ Request::segment(1) == 'layanan' ? 'active' : ''}}">
							<a href="/layanan">
								<i class="fas fa-layer-group"></i>
								<p>Layanan</p>
							</a>
						</li>
                        <li class="nav-item {{ Request::segment(1) == 'produk' ? 'active' : ''}}">
                            <a href="/produk">
                                <i class="fas fa-desktop"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'galeri' ? 'active' : ''}}">
                            <a href="/galeri">
                                <i class="fas fa-th-list"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'konsultasi' ? 'active' : ''}}">
							<a href="/konsultasi">
								<i class="fas fa-table"></i>
								<p>Konsultasi</p>
							</a>
						</li>
                    </li>
                </ul>
            </div>
        </div>
    </div>