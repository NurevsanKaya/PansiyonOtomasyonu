
<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container">
        <div class="row">
            <!-- Hakkımızda -->
            <div class="col-md-4 mb-4">
                <h4 class=" mb-3" style="color: #445799;">Hakkımızda</h4>
                <p class="text-muted">Şirketimiz, müşteri memnuniyetini ön planda tutarak kaliteli hizmet sunar.</p>
            </div>

            <!-- Hızlı Bağlantılar -->
            <div class="col-md-4 mb-4">
                <h4 class=" mb-3" style="color: #445799;" >Hızlı Bağlantılar</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ url('/') }}" class="text-white text-decoration-none hover-effect">Ana Sayfa</a></li>
                    <li class="mb-2"><a href="{{ url('/hizmetler') }}" class="text-white text-decoration-none hover-effect">Hizmetler</a></li>
                    <li class="mb-2"><a href="{{ url('/contact') }}" class="text-white text-decoration-none hover-effect">İletişim</a></li>
                </ul>
            </div>

            <!-- İletişim -->
            <div class="col-md-4">
                <h4 class=" mb-3" style="color: #445799;">İletişim</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Adres: Örnek Mahallesi, No: 123, İstanbul</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i>Telefon: +90 123 456 78 90</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i>Email: info@example.com</li>
                </ul>
            </div>
        </div>

        <!-- Telif Hakkı -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p class="mb-0 text-muted">&copy; {{ date('Y') }} Şirket Adı. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
</footer>
