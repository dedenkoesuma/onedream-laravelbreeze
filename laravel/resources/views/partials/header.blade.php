                                @auth
                                <header class="navbar sticky-top sticky-menu-home flex-md-nowrap p-0 shadow" data-bs-theme="dark">
                                        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4" href="#"><img src="img/logo/fw_logo.png" alt="OneDream"></a>
                                        <div class="navbar-nav">
                                            <div class="nav-item text-nowrap">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit" class="nav-link mt-2 mr-4 border-0 text-white">Log Out</button>
                                                </form>
                                            </div>
                                        </div>
                                        </header>
                                @else
                                <header id="header-sticky" class="{{ Request::is('/') || Request::is('dashboard') ? 'sticky-menu-home' : 'transparent-header s-transparent-header' }}">
                                    <div class="container">
                                        <div class="s-header-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3">
                                                    <div class="logo">
                                                        <a href="index.html"><img src="img/logo/fw_logo.png" alt="Logo"></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 text-right d-none d-lg-block">
                                                    <div class="menu-area s-menu-area d-inline-block">
                                                        <div class="main-menu">
                                                            <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Beranda</a></li>
                                        <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ url('/layanan') }}">Layanan</a>
                                            <ul class="submenu">
                                                <li class="lg-8"><a href="services.html">Video</a></li>
                                                <li><a href="services-single.html">Foto</a></li>
                                                <li><a href="pricing.html">Desain</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/contact') }}">Kontak</a></li>
                                    </ul>
                                @endauth
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu s-mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
