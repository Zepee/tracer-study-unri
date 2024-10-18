<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/kuesioner', function () {
    return view('kuesioner.kuesioner');
})->name('kuesioner');

Route::get('/alumni', function () {
    return view('alumni.alumni');
})->name('alumni');

Route::get('/home', function () {
    return view('homepage.home');
})->name('home');

Route::get('/map', function () {
    return view('map.map');
})->name('map');