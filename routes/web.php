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

