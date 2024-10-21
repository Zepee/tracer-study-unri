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

Route::get('/pengumuman', function () {
    return view('pengumuman.pengumuman');
})->name('pengumuman');

Route::get('/peta', function () {
    return view('map.map');
})->name('peta');