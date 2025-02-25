
@extends('Home')
@section('content')
    @vite('resources/css/contact.css')


    <div class="contact-container">
        <h1 class="contact-title">İLETİŞİM</h1>
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1078.2052351644659!2d26.407020440413714!3d40.15063766545399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b1a9ce13796297%3A0x9cb195f9a19fd0f1!2sHalk%20Bah%C3%A7esi!5e0!3m2!1str!2str!4v1740331822388!5m2!1str!2str"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>


    <!-- Adres ve İletişim Bilgileri -->
    <div class="contact-info">
        <div class="info-item">
            <img src="img-icon.png" alt="Adres İkonu" class="info-icon" />
            <p class="info-text">
                <strong>Adres</strong><br />
                İsmetpaşa Mah. Şefik İnan Cad. Adnan Adıvar Sok. No: 5 ÇANAKKALE
            </p>
        </div>
        <div class="info-item">
            <img src="phone-icon.png" alt="Telefon İkonu" class="info-icon" />
            <p class="info-text">
                <strong>Bizi Arayın!</strong><br />
                +90 286 213 22 32<br />
                +90 544 280 07 17
            </p>
        </div>
    </div>
@endsection




