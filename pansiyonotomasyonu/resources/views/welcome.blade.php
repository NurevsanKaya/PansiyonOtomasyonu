@extends('Home')
@section('content')

    <br>
    <br>
    <br>
    <br>


    <!-- Hero Section -->
    <section class="hero position-relative" style="background: url('https://th.bing.com/th/id/OIP.UY_yzIQzkYEiSX7-jlrynQHaEK?rs=1&pid=ImgDetMain') no-repeat center center/cover; height: 80vh;">
        <!-- Karanlık Katman -->
        <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

        <!-- İçerik -->
        <div class="container position-relative text-center text-white d-flex flex-column align-items-center justify-content-center" style="height: 100%; z-index: 2;">
            <h1 class="display-4 fw-bold">GülNur Yurt</h1>
            <p class="lead mt-3">Konforlu ve güvenli bir yurt deneyimi için doğru adres.</p>
        </div>
    </section>

    <!-- Hizmetler Bölümü -->
    <section id="hizmetler" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Hizmetlerimiz</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card p-4 shadow">
                        <i class="fas fa-bed fa-3x text-primary"></i>
                        <h4 class="mt-3">Rahat Odalar</h4>
                        <p>Modern ve konforlu odalarımız öğrencilerimizin rahatı için dizayn edilmiştir.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow">
                        <i class="fas fa-utensils fa-3x text-primary"></i>
                        <h4 class="mt-3">Lezzetli Yemekler</h4>
                        <p>Sağlıklı ve dengeli beslenme için günlük taze yemekler sunuyoruz.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow">
                        <i class="fas fa-wifi fa-3x text-primary"></i>
                        <h4 class="mt-3">Ücretsiz Wi-Fi</h4>
                        <p>Yüksek hızlı internet ile kesintisiz bağlantı keyfi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Bölümü -->
    <section class="gallery py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Galeri</h2>
            <div class="row">
                <div class="col-md-4"><img src="" class="img-fluid rounded shadow"></div>
                <div class="col-md-4"><img src="" class="img-fluid rounded shadow"></div>
                <div class="col-md-4"><img src="" class="img-fluid rounded shadow"></div>
            </div>
        </div>
    </section>
@endsection

