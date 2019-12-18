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

/*
	php artisan make:model Yazar -m
	php artisan migrate
	php artisan make:controller YazarController --resource
	
	php artisan make:request yazarRequest
	php artisan make:request kitapRequest

*/


// ANA SAYFAYI GÖSTER
Route::get('/', function () {
    return view('anasayfa');
})->name('ANASAYFA');



Route::prefix('yazar')->group(function () {
	// TÜM YAZARLARI LİSTELE
	Route::get('/index', 'YazarController@index')->name("yazarIndex");

	// TEK YAZAR KAYIT FORMU
	Route::get('/create', 'YazarController@create')->name("yazarCreate");

	// TEK YAZAR KAYDET
	Route::post('/store', 'YazarController@store')->name("yazarStore");

	// TEK YAZAR GÖSTER
	Route::get('/show/{id}', 'YazarController@show')->name("yazarShow");

	// TEK YAZAR EDİT
	Route::get('/edit/{id}', 'YazarController@edit')->name("yazarEdit");

	// TEK YAZAR EDİT SAVE
	Route::post('/update/{id}', 'YazarController@update')->name("yazarUpdate");

});


Route::prefix('kitap')->group(function () {
	// TÜM KİTAPLARI LİSTELE
	Route::get('/index', 'KitapController@index')->name("kitapIndex");

	// TEK KİTAP KAYIT FORMU
	Route::get('/create', 'KitapController@create')->name("kitapCreate");

	// TEK KİTAP KAYDET
	Route::post('/store', 'KitapController@store')->name("kitapStore");

	// TEK KİTAP GÖSTER
	Route::get('/show/{id}', 'KitapController@show')->name("kitapShow");

	// TEK KİTAP EDİT
	Route::get('/edit/{id}', 'KitapController@edit')->name("kitapEdit");

	// TEK KİTAP EDİT SAVE
	Route::post('/update/{id}', 'KitapController@update')->name("kitapUpdate");

});






////////////////////////////////////
////////////////////////////////////
////////////////////////////////////
////////////////////////////////////












