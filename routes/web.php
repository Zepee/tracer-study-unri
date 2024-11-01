<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuesionerController;

Route::get('/', function () {
    return view('login.index');
});

Route::get('/kuesioner', [KuesionerController::class, 'create'])->name('kuesioner');

Route::post('/kuesioner', [KuesionerController::class, 'store'])->name('kuesioner.store');

Route::get('/kuesioner/success', [KuesionerController::class, 'success'])->name('kuesioner.success');

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
