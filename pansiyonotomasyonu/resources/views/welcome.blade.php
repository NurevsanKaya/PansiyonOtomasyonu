@extends('Home')
@section('content')


<!-- Hero Section -->
<section class="hero d-flex align-items-center text-center text-white" style="background: url('https://source.unsplash.com/1600x900/?dormitory') no-repeat center center/cover; height: 80vh;">
    <div class="container">
        <h1 class="fw-bold">Konforlu ve Güvenli Bir Yurt Deneyimi</h1>
        <p>Öğrencilerimiz için modern ve rahat bir yaşam alanı sunuyoruz.</p>
        <a href="#hizmetler" class="btn btn-primary mt-3">Hizmetlerimizi İncele</a>
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
