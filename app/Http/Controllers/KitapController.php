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

	public function duzenlemeyiKaydet(Request $request, $id) {
		$kitap = Kitap::findOrFail($id);
		$kitap->kitapAdi    = $request->kitapAdi;
		$kitap->kitapYazari = $request->kitapYazari;
		$kitap->yayinYili   = $request->yayinYili;
		$kitap->ozeti       = $request->ozeti;
		$Sonuc = $kitap->save();
		dd("Kayıt güncellendi");
	}


	public function goster($id) {
		// $Kitap = Kitap::where("id", $id)->first();
		$Kitap = Kitap::findOrFail($id); // select * from kitaps where id=4
		return view('kitapGoster', compact(['Kitap']));
	}

	public function duzenle($id) {
		// $Kitap = Kitap::where("id", 1)->first();
		$Kitap = Kitap::findOrFail($id);
		return view('kitapDuzenle', compact(['Kitap']));
	}

}
