


<header class="header">
    <div class="container">
        <div class="logo">
            <h1>Can Pansiyon</h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">ANASAYFA</a></li>
                <li><a href="{{ url('/hakkımızda') }}">HAKKIMIZDA</a></li>
                <li><a href="{{ url('/hizmetler') }}">HİZMETLER</a></li>
                <li><a href="{{ url('/galeri') }}">GALERİ</a></li>
                <li><a href="{{ url('/contact') }}">İLETİŞİM</a></li>
            </ul>
            <!-- Sosyal medya ikonları -->
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Buton (Navbarın Üstüne Eklenen) -->
            <div class="navbar-button-container">
                <a class="custom-button" href="{{ route('login') }}">Giriş Yap</a>
                    <a class="custom-button" href="{{ route('register') }}" >Kayıt Ol</a>
            </div>
        </nav>
    </div>
</header>
