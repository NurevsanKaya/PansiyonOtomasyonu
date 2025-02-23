<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venüs Pansiyon</title>
    <!-- CSS Dosyasını Dahil Et -->
    @vite('resources/css/footer.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/home.js')
    @vite('resources/css/home.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
@include('Navbar')

    <div class="slider-container">
        <button class="prev-button">❮</button>
        <div class="slider">
            <div class="slides">
                <div class="slide"><img src="slide1.jpg" ></div>
                <div class="slide"><img src="slides2.jpg" ></div>
                <div class="slide"><img src="slide3.jpg" ></div>
            </div>
        </div>
        <button class="next-button">❯</button>
    </div>
<br>

@include('Footer')
<!-- JavaScript Dosyasını Dahil Et -->
@vite('resources/js/app.js')

</body>
</html>



