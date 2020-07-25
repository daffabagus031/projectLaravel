<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    $nama = 'Muhammad Daffa Bagus Muttaqin';
    return view('profile', ['nama' => $nama]);
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});
