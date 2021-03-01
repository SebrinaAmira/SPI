	<!-- Sidebar -->
    <div class="sidebar sidebar-style-2">			
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{ url('/')}}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                SPI
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="/dashboard">
											<span class="sub-item">Dashboard</span>
										</a>
									</li>
                                </ul>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#profil">
                            <i class="fas fa-pen-square"></i>
                            <p>Profile</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="profil">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/profil">
                                        <span class="sub-item">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>              
                        <a data-toggle="collapse" href="#layanan">
                            <i class="fas fa-layer-group"></i>
                            <p>Layanan</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="layanan">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/layanan">
                                        <span class="sub-item">Layanan</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a data-toggle="collapse" href="#konsultasi">
                            <i class="fas fa-table"></i>
                            <p>Konsultasi</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="konsultasi">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/konsultasi">
                                        <span class="sub-item">Konsultasi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>