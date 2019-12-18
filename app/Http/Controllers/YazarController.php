<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yazar;
use App\Http\Requests\yazarRequest; // Validation işlemi bu dosyada


class YazarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Yazarlar = Yazar::all();
        return view('yazarlar.yazarIndex', compact(['Yazarlar']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yazarlar.yazarCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(yazarRequest $request)
    {
/*
        $request->validate([
            'yazarAdi'    => 'required|min:3|max:200',
            'yazarEposta' => 'required|email',
        ]);
*/
        $Yazar = new Yazar;
        $Yazar->yazarAdi    = $request->yazarAdi;
        $Yazar->yazarEposta = $request->yazarEposta;
        $Sonuc = $Yazar->save();
        return redirect()->back()->with('success', 'Kayıt ekleme işlemi başarılı');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Yazar = Yazar::findOrFail($id);
        return view('yazarlar.yazarShow', compact(['Yazar']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Yazar = Yazar::findOrFail($id);
        return view('yazarlar.yazarEdit', compact(['Yazar']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(yazarRequest $request, $id)
    {
        if($request->silonay == "SİL") {
            $this->destroy($id);
        }
/*
        $request->validate([
            'yazarAdi'    => 'required|min:3|max:200',
            'yazarEposta' => 'required|email',
        ]);
*/
        $Yazar = Yazar::findOrFail($id);
        $Yazar->yazarAdi    = $request->yazarAdi;
        $Yazar->yazarEposta = $request->yazarEposta;
        $Sonuc = $Yazar->save();
        return redirect()->back()->with('success', 'Güncelleme işlemi başarılı');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Yazar = Yazar::findOrFail($id);
        $Yazar->delete();
        dd("Kayıt silindi");
    }
}
