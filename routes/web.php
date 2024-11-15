<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuesionerController;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/kuesioner', [KuesionerController::class, 'getKuesionerView'])->name('kuesioner');

// HIT API
Route::post('/kuesioner/store', [KuesionerController::class, 'store'])->name('kuesioner.store');


Route::get('/alumni', function () {
    return view('alumni.alumni');
})->name('alumni');

Route::get('/pengumuman', function () {
    return view('pengumuman.pengumuman');
})->name('pengumuman');

Route::get('/alumni/peta', function () {
    return view('map.map');
})->name('alumni.peta');

Route::get('/alumni/profil', function () {
    return view('profil.profil');
})->name('alumni.profil');


