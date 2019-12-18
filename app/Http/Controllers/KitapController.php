<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kitap;

class KitapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Kitaplar = Kitap::all();
        return view('kitaplar.kitapIndex', compact(['Kitaplar']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kitaplar.kitapCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kitap = new Kitap;
        $kitap->kitapAdi    = $request->kitapAdi;
        $kitap->kitapYazari = $request->kitapYazari;
        $kitap->yayinYili   = $request->yayinYili;
        $kitap->ozeti       = $request->ozeti;
        $Sonuc = $kitap->save();
        dd("Kayıt eklendi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $Kitap = Kitap::where("id", 1)->first();
        $Kitap = Kitap::findOrFail($id);
        return view('kitaplar.kitapShow', compact(['Kitap']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $Kitap = Kitap::where("id", $id)->first();
        $Kitap = Kitap::findOrFail($id); // select * from kitaps where id=4
        return view('kitaplar.kitapEdit', compact(['Kitap']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kitap = Kitap::findOrFail($id);
        $kitap->kitapAdi    = $request->kitapAdi;
        $kitap->kitapYazari = $request->kitapYazari;
        $kitap->yayinYili   = $request->yayinYili;
        $kitap->ozeti       = $request->ozeti;
        $Sonuc = $kitap->save();
        dd("Kayıt güncellendi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Kitap = Kitap::findOrFail($id);
        $Kitap->delete();
        dd("Kayıt silindi");
    }
}
