<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can Pansiyon</title>
    @vite('resources/js/app.js')
    @vite('resources/css/footer.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/home.js')
    @vite('resources/css/home.css')
    @vite('resources/css/contact.css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    <!-- CSS Dosyasını Dahil Et -->

</head>
<body>
@include('Navbar')

   @yield('content')


<br>

@include('Footer')
<!-- JavaScript Dosyasını Dahil Et -->


</body>
</html>


