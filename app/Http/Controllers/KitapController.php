<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kitap;


class KitapController extends Controller
{

	public function index() {
		$Kitaplar = Kitap::all();
		return view('kitaplariListele', compact(['Kitaplar']));
	}
    
	public function ekle(Request $request) {
		$kitap = new Kitap;
		$kitap->kitapAdi    = $request->kitapAdi;
		$kitap->kitapYazari = $request->kitapYazari;
		$kitap->yayinYili   = $request->yayinYili;
		$kitap->ozeti       = $request->ozeti;
		$Sonuc = $kitap->save();
		dd("Kayıt eklendi");
	}

}
