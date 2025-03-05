@extends('Home')

@section('content')
    @vite('resources/js/aboutus.js')
    @vite('resources/css/aboutus.css')
    <br>
    <br>
    <br>


    <div class="container mt-5">
        <!-- Başlık ve Açıklama -->
        <div class="text-center">
            <h2 class="fw-bold">Ardes Öğrenci Yurdu</h2>
            <p class="text-muted">
                Güvenli, konforlu ve modern öğrenci yurdu!
                Ardes Öğrenci Yurdu, öğrenciler için en iyi konaklama deneyimini sunar.
            </p>
        </div>

        <!-- Görselli Bölüm -->
        <div class="row align-items-center mt-4">
            <div class="col-md-6">
                <img src="oda1.jpg" alt="Oda 1">
            </div>
            <div class="col-md-6">
                <h1> Çomü Terzioğlu Kampüsü'ndeki Tek Özel Yurttasın <h1>
                        <br>
                        <br> <br>
                        <br>
                <h2 class="fw-bold">Neden Bizi Seçmelisiniz?</h2>

                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-primary"></i> Güvenli ve modern odalar</li>
                    <li><i class="fas fa-check-circle text-primary"></i> 7/24 Güvenlik ve Kamera Sistemi</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Ücretsiz Wi-Fi ve Çalışma Alanları</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Spor Salonu ve Sosyal Alanlar</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Uygun Fiyat ve Esnek Ödeme Seçenekleri</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn btn-primary">Bize Ulaşın</a>
            </div>
        </div>

        <!-- Açılır Kapanır Bilgi Bölümü (Accordion) -->
        <div class="mt-5">
            <h3 class="fw-bold text-center">Sıkça Sorulan Sorular</h3>
            <div class="accordion mt-3" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Odalar Kaç Kişilik?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            1, 2, 3 ve 4 kişilik odalarımız mevcuttur. Odalarımız konforlu ve ferahtır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Yemek Hizmeti Var mı?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sabah kahvaltısı ve akşam yemeği yurt ücretine dahildir.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Çamaşırhane ve Temizlik Hizmeti Sunuluyor mu?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Haftalık oda temizliği ve çamaşırhane hizmetimiz bulunmaktadır.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS ile Animasyon ve Dinamik İçerik -->
        <div class="mt-5">
            <h3 class="fw-bold text-center">Yurdumuzu Keşfedin</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm info-box" data-text="Konforlu yataklar, geniş dolaplar ve modern dekorasyon!">
                        <div class="card-body text-center">
                            <i class="fas fa-bed fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Modern Odalar</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm info-box" data-text="Geniş çalışma masaları ve ücretsiz Wi-Fi ile verimli ders çalışma alanları!">
                        <div class="card-body text-center">
                            <i class="fas fa-book-open fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Çalışma Alanları</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm info-box" data-text="Kampüs ve şehir merkezine yakın, kolay ulaşım!">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Harika Konum</h5>
                        </div>
                    </div>
                </div>
            </div>
            <p id="info-text" class="text-center mt-3"></p>
        </div>

    </div>

@endsection
