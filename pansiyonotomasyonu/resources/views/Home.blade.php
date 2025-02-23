@extends('Navbar')
@vite('resources/css/home.css')
@vite('resources/js/home.js')


<div class="slider-container">
    <button class="prev-button">❮</button>
    <div class="slider">
        <div class="slides">
            <div class="slide"><img src="slide1.jpg" ></div>
            <button class="overlay-button">Rezervasyon Yap</button>
            <div class="slide"><img src="slides2.jpg" ></div>
            <div class="slide"><img src="slide3.jpg" ></div>
        </div>
    </div>
    <button class="next-button">❯</button>
</div>



