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
*/

// TÜM YAZARLARI LİSTELE
Route::get('/yazar', 'YazarController@index')->name("yazarIndex");

// TEK YAZAR KAYIT FORMU
Route::get('/yazar/create', 'YazarController@create')->name("yazarCreate");

// TEK YAZAR KAYDET
Route::post('/yazar/store', 'YazarController@store')->name("yazarStore");

// TEK YAZAR GÖSTER
Route::get('/yazar/{id}', 'YazarController@show')->name("yazarShow");

// TEK YAZAR EDİT
Route::get('/yazar/edit/{id}', 'YazarController@edit')->name("yazarEdit");

// TEK YAZAR EDİT SAVE
Route::post('/yazar/update/{id}', 'YazarController@update')->name("yazarUpdate");







////////////////////////////////////
////////////////////////////////////
////////////////////////////////////
////////////////////////////////////


// ANA SAYFAYI GÖSTER
Route::get('/', function () {
    return view('anasayfa');
})->name('ANASAYFA');


// TÜM KİTAPLARI LİSTELE
Route::get('/kitaplariListele', 'KitapController@index')->name("LISTELE");


// KİTAP DÜZENLEME FORMUNU GÖSTER
Route::get('/kitapDuzenle/{id}', 'KitapController@duzenle')->name("DUZENLEMEFORMU");


// GÜNCELLEMELERİ KAYDET DÜĞMESİNE BASINCA YAPILACAKLAR
Route::post('/kitapDuzeneleKaydet/{id}', 'KitapController@duzenlemeyiKaydet')->name("DUZENLEMEYIKAYDET");


// TEK KİTABIN BİLGİLERİNİ GÖSTER
Route::get('/kitapGoster/{id}', 'KitapController@goster')->name("GOSTER");
// NOT: {id} parametresi nedeniyle View içinde şöyle kullanılır: 
// {{ route("GOSTER", $Kitap->id) }}


// YENİ KİTAP EKLEME FORMUNU GÖSTER
Route::get('/kitapEkle', function () {
    return view('kitapEkle');
})->name("EKLEMEFORMU");


// GÜNCELLEMELERİ KAYDET DÜĞMESİNE BASINCA YAPILACAKLAR
Route::post('/kitapKaydet', 'KitapController@ekle')->name("KITAPKAYDET");













