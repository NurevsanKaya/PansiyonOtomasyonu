
@extends('Home')
@section('content')
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
@endsection
