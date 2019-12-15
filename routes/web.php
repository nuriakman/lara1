<?php

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
    return view('anasayfa');
});

Route::get('/kitaplariListele', 'KitapController@index');

Route::get('/kitapEkle', function () {
    return view('kitapEkle');
});

Route::post('/kitapKaydet', 'KitapController@ekle');


