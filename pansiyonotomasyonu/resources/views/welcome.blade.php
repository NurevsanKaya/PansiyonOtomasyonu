<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venüs Pansiyon</title>
    <!-- CSS Dosyasını Dahil Et -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <h1>Venüs Pansiyon</h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#anasayfa">ANASAYFA</a></li>
                <li><a href="#hakkimizda">HAKKIMIZDA</a></li>
                <li><a href="#hizmetler">HİZMETLER</a></li>
                <li><a href="#galeri">GALERİ</a></li>
                <li><a href="#iletisim">İLETİŞİM</a></li>
            </ul>
            <!-- Sosyal medya ikonları -->
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </nav>
    </div>
</header>



<!-- JavaScript Dosyasını Dahil Et -->
@vite('resources/js/app.js')

</body>
</html>
