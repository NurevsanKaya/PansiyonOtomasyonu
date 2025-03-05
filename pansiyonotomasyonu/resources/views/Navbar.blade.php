


<header class="header">
    <div class="container d-flex ">
        <div class="logo mt-2">
            <h1>GülNur</h1>
        </div>
        <nav class="navbar mr-2">
            <ul>
                <li><a href="{{ url('/') }}">ANASAYFA</a></li>
                <li><a href="{{ url('/about') }}">HAKKIMIZDA</a></li>
                <li><a href="{{ url('/room') }}">ODALAR</a></li>
                <li><a href="{{ url('/gallery') }}">GALERİ</a></li>
                <li><a href="{{ url('/contact') }}">İLETİŞİM</a></li>
            </ul>
            <!-- Sosyal medya ikonları -->
            <div class="social-icons mr-5">
                <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Buton (Navbarın Üstüne Eklenen) -->
            <div class="navbar-button-container ml-4">
                <a class="custom-button" href="{{ route('login') }}">Giriş Yap</a>
                    <!--<a class="custom-button" href="{{ route('register') }}" >REZERVASYON</a>-->
            </div>
        </nav>
    </div>
</header>
