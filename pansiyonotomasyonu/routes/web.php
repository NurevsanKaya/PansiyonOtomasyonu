<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/contact', function () {
    return view('contact'); // contact.blade.php dosyasını döndürür
});
Route::get('/', function () {
    return view('Slider');
});
