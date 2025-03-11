<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-xl position-relative d-flex align-items-center justify-content-between">


    <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">GülNur.</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">ANASAYFA</a></li>
                <li><a href="{{ url('/about') }}">HAKKIMIZDA</a></li>

                <li><a href="{{ url('/gallery') }}">GALERİ</a></li>

                <li class="dropdown"><a href="{{ url('/room') }}"><span>ODALAR</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">TEK KİŞİLİK</a></li>

                        <li><a href="#">İKİ KİŞİLİK</a></li>
                        <li><a href="#">ÜÇ KİŞİLİK</a></li>
                        <li><a href="#">DÖRT KİŞİLİK</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact') }}">İLETİŞİM</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="">Giriş Yap</a>
    </div>
</header>
