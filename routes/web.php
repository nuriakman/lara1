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
Route::get('/ANASAYFAESKI', function () {
    return view('anaSayfaEski');
})->name('ANASAYFAESKI');


Route::get('/', function () {
    return view('anaSayfa');
})->name('ANASAYFA');


Route::get('/iliski1/{id}',  'IliskiController@getASIL');
Route::get('/iliski2/{id}',  'IliskiController@getTEK');


Route::get('/ajaxRequestPost',  'ililceController@index');
Route::post('/ajaxRequestPost', 'ililceController@ilcegetirAjax')->name('ajaxRequestPost');


Route::get('/kitapedit', 'KitapEditController@index');


Route::resource('YAZAR', 'YazarController')->middleware("auth");


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













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// home dizinine gelen talepleri yönlendirmek istersek:
Route::get('/home', function () {
    return redirect("/");
});

















